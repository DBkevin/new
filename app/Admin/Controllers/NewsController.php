<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use App\Models\Topic;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;
use App\Services\InsteadImg;
use App\Services\GetKeyAndDescription;
use App\Models\Flag;
use App\Models\Adminuser;
use Dcat\Admin\Admin;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(['Topic']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('keywords')->width('10%')->limit(20, '...');
            $grid->column('description')->width('10%')->limit(20, '...');
            $grid->column('picture', '栏目缩略图')->image('/storage/', 50, 100);
            $grid->column('Topic.title', '所属栏目')->badge('success');
            $grid->Flags("标签")->pluck('name')->label();
            $grid->Users("发布者")->pluck('name')->label();
            $grid->column('body', '文章内容')->display('查看内容')
                ->modal(function ($modal) {
                    // 设置弹窗标题
                    $modal->title($this->title);
                    // 自定义图标
                    $modal->icon('feather icon-book');
                    $card = new Card(null, $this->body);

                    return "<div style='padding:10px 10px 0'>$card</div>";
                });
            $grid->column('doctor.name', '所属医生')->badge('primary');
            $grid->column('count');
            $grid->column('created_at');
            $grid->disableViewButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->like("title", "文章名称");
                $filter->like("Doctor.id", "医生姓名")->select(\App\Models\Doctor::all()->pluck("name", 'id')->toArray());
                $filter->between('created_at', "发布时间")->date();
                $filter->like('Users.id', "文章发布者")->select(Adminuser::all()->pluck("name", "id")->toArray());
            });
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                //当前ID
                $id = $actions->getKey();
                $route = route('NewsShow', ['id' => $id]);
                $actions->append("<a href='$route' target='_blank'><i class='fa fa-eye'></i></a>");
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        return Form::make(new News(), function (Form $form) {
            $form->display('id');
            $form->text('title', "标题(必填)")->creationRules('unique:news,title|min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('keywords', "关键词(选填)")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('description', "文章导读(选填)")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->select('flags', "文章位置(选填)")->options(Flag::all()->pluck('name', 'id'))->help("文章标签信息,首页就是出现在首页,列表就是出现在在列表,不选没有");
            $form->select('topic_id', '所属项目(必填)')->options(function ($id) {
                $topics = Topic::find($id);
                if ($topics) {
                    return [$topics->id => $topics->title];
                }
            })->ajax('gettopic')->rules('required');
            $form->select('doctor_id', "所属医生(必填)")->options(\App\Models\Doctor::all()->pluck("name", 'id'))->rules('required');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images/article')->autoUpload()->required();
            $form->editor('body', '文章正文(必填)')->rules('required');
            if ($form->isCreating()) {
                $form->hidden('users')->value(Admin::user()->id);
            }
            $form->display('created_at');
            $form->display('updated_at');
            if ($form->isEditing()) {
                $id = $form->getKey();
                $route = route('NewsShow', ['id' => $id]);
                $form->tools(function (Form\Tools $tools) use ($route) {
                    $tools->disableView();
                    $tools->append("<a class='btn btn-sm  btn-success' href='$route'  target='_blank'><i class='fa fa-eye'></i>&nbsp;&nbsp;查看</a>");
                });
            }
            // 去掉`查看`checkbox
            $form->footer(function ($footer) {
                $footer->disableViewCheck();
                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();
                // 去掉`继续创建`checkbox
                $footer->disableCreatingCheck();
            });
            $form->submitted(function (Form $form) {
                //检查body里面是否有站外的图片
                $body = clean($form->body, "body");
                $form->body = $body;
                $oldBody = $form->body;
                $newBody = new InsteadImg($oldBody);
                if ($newBody->is) {
                    $form->body = $newBody->body;
                    if (is_null($form->picture)) {
                        $form->picture = $newBody->newPicture[0];
                    }
                } else {
                    if ($newBody->isPic) {
                        return $form->response()->error('获取远程图片失败~');
                    }
                }
                $newsKe =  new GetKeyAndDescription($form->body);
                if (is_null($form->keywords)) {
                    $form->keywords = $newsKe->getKey();
                }
                if (is_null($form->description)) {
                    $form->description = $newsKe->getDescription();
                }
            });
        });
    }
}
