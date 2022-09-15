<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Question;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Topic;
use App\Models\Doctor;
use App\Services\InsteadImg;
use App\Services\GetKeyAndDescription;
use App\Models\Flag;

class QuestionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Question(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '标题')->width('8%')->limit(10, '...');
            $grid->column('topic.title', '所属项目')->badge('success');
            $grid->column('qbody', '提问内容')->width('8%')->limit(10, '...');
            $grid->Flags()->pluck('name')->label();
            $grid->column('description', '栏目描述')->width('8%')->limit(10, '...');
            $grid->column('keywords', '栏目关键字')->width('8%')->limit(10, '...');
            $grid->column('qage', "提问者年龄")->display(function ($age) {
                return $age . "岁";
            });
            $grid->column('doctor.name', '所属医生')->badge('primary');
            $grid->column('abody', "回答内容")->width('8%')->limit(10, '...');;
            $grid->disableViewButton();
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                //当前ID
                $id = $actions->row->id;
                $url = route('questionShow', ['id' => $id]);
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
        return Form::make(new Question(), function (Form $form) {
            $form->display('id');
            $form->text('title', "标题")->creationRules('unique:question,title|min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->select('topic_id', '所属项目')->options(function ($id) {
                $topics = Topic::find($id);
                if ($topics) {
                    return [$topics->id => $topics->title];
                }
            })->ajax('gettopic')->rules('required');
            $form->select('flags', "标签")->options(Flag::all()->pluck('name','id'))->help("文章标签信息,首页就是出现在首页,列表就是出现在在列表,不选就没有");
            $form->text('description', "文章描述")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('keywords', "关键词用[半角逗号]分割")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('qbody', "提问内容,最多200多个字符")->creationRules('min:2|max:255', ['min' => '最少需要2个字符', "max" => "最多不能超过255个字符"])->updateRules('min:2');
            $form->number('qage', "提问者年龄可不填")->default(0);
            $form->text('qaddress', "提问者所在地(省份),可不填,默认福建")->default("福建");
            $form->number('qcount', "问题关注人数,可不填")->default(0);
            $form->select('doctor_id', "所属医生")->options(\App\Models\Doctor::all()->pluck("name", 'id'))->rules('required');
            $form->textarea('abody', "回答内容")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');;
            if ($form->isEditing()) {
                $id = $form->getKey();
                $form->tools(function (Form\Tools $tools) use ($id) {
                    $tools->disableView();
                    $url = route('questionShow', ['id' => $id]);
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
            $form->submitted(function (Form $form) {
                //检查body里面是否有站外的图片
                $oldBody = $form->abody;
                $newBody = new InsteadImg($oldBody);
                if ($newBody->is) {
                    $form->body = $newBody->body;
                }
                $newsKe =  new GetKeyAndDescription($form->abody);
                if (is_null($form->keywords)) {
                    $form->keywords = $newsKe->getKey();
                }
                if (is_null($form->description)) {
                    $form->description = $form->qbody;
                }
            });
        });
    }
}
