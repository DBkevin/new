<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Information;
use App\Models\Doctor;
use App\Models\Topic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Card;

class InformationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Information(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '标题')->width('10%')->limit(20, '...');
            $grid->column('seotitle', 'SEO标题')->width('10%')->limit(20, '...');
            $grid->column('description', '栏目描述')->width('10%')->limit(20, '...');
            $grid->column('picture', '栏目缩略图')->image('http://cf.test/storage/', 50, 100);
            $grid->column('keywords', '栏目关键字')->width('10%')->limit(20, '...');
            $grid->column('body', '文章内容')->display('查看内容')
                ->modal(function ($modal) {
                    // 设置弹窗标题
                    $modal->title($this->title);
                    // 自定义图标
                    $modal->icon('feather icon-book');
                    $card = new Card(null, $this->body);

                    return "<div style='padding:10px 10px 0'>$card</div>";
                });
            $grid->column('topic.title', '所属项目')->badge('success');
            $grid->column('doctor.name', '所属医生')->badge('primary');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
                $filter->equal('title');
            });
            $grid->disableViewButton();
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                //当前ID
                $id = $actions->row->id;
                $url = route('zsShow', ['id' => $id]);
                $actions->append("<a href='$url' target='_blank'><i class='fa fa-eye'></i></a>");
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
        return Form::make(new Information(), function (Form $form) {
            $form->display('id');
            $form->text('title', "标题")->creationRules('unique:information,title|min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('seotitle', "seo标题,可为空");
            $form->text('description', "文章描述")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images/article')->autoUpload();
            $form->text('keywords', "关键词用[半角逗号]分割")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->select('topic_id', '所属项目')->options(function ($id) {
                $topics = Topic::find($id);
                if ($topics) {
                    return [$topics->id => $topics->title];
                }
            })->ajax('gettopic')->rules('required');
            $form->select('doctor_id', "所属医生")->options(\App\Models\Doctor::all()->pluck("name", 'id'))->rules('required');
            $form->editor('body', "文章内容")->rules("required")->imageDirectory('article');
            if ($form->isEditing()) {
                $id = $form->getKey();
                $form->tools(function (Form\Tools $tools) use ($id) {
                    $tools->disableView();
                    $url = route('zsShow', ['id' => $id]);
                    $tools->append("<a class='btn btn-sm btn-success' href='$url'  target='_blank'><i class='fa fa-eye'></i>&nbsp;&nbsp;查看</a>");
                });
            }
            $form->display('created_at');
            $form->display('updated_at');
            // 去掉`查看`checkbox
            $form->footer(function ($footer) {
                $footer->disableViewCheck();

                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();

                // 去掉`继续创建`checkbox
                $footer->disableCreatingCheck();
            });
        });
    }
}
