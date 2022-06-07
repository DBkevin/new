<?php

namespace App\Admin\Controllers;

use App\Models\Topic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Category as CategoryModel;
use App\Models\Info;

class TopicController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Topic(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '标题');
            $grid->column('description', '栏目描述');
            $grid->column('keyword', '栏目关键字');
            $grid->column('category_id', '所属大栏目');
            $grid->column('parent_id', '父级标题');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Topic(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('description');
            $show->field('keyword');
            $show->field('category_id');
            $show->field('parent_id');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(Topic::with(['Category', 'Info', 'Introtdtion', 'Commit','Notice']), function (Form $form) {
            $form->display('id');
            $form->text('title', '栏目标题')->creationRules('unique:topic,title|min:2', ['unique' => '标题不能重复', 'min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('description', '栏目描述');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images')->autoUpload();
            $form->text('keyword', '关键词用[半角逗号]分割');
            $form->select('category_id', '所属栏目')->options(CategoryModel::all()->pluck('title', 'id'))->rules('required', ['required' => '所属栏目必选']);
            $form->select('parent_id', '所属二级栏目')->options(Topic::all()->pluck('title', 'id'))->default(0);
            $form->divider();
            $form->html('<h3 style="text-align: center;">项目基础信息栏</h3>',);
            $form->text('Info.site', '手术部位');
            $form->text('Info.price', '手术价格');
            $form->text('Info.methods', '手术方式');
            $form->text('Info.count', '治疗次数');
            $form->text('Info.keep', '效果维持');
            $form->text('Info.narcosis', '麻醉方式');
            $form->text('Info.materials', '手术材料');
            $form->text('Info.lengthOfStay', '住院时间');
            $form->text('Info.removeTheTime', '拆线时间');
            $form->html('<h3 style="text-align: center;">项目介绍栏</h3>',);
            $form->text('Introtdtion.operationTime', '手术时长');
            $form->text('Introtdtion.swellingTime', '消肿时长');
            $form->text('Introtdtion.removeTime', '恢复时长');
            $form->text('Introtdtion.price', '参考价格');
            $form->text('Introtdtion.material', '材料设备');
            $form->html('<h3 style="text-align: center;">项目常识栏</h3>',);
            $form->text('Commit.effect', '手术效果');
            $form->text('Commit.merit', '优点');
            $form->text('Commit.defect', '缺点');
            $form->text('Commit.crowd', '适应人群');
            $form->text('Commit.risk', '风险提示');
            $form->html('<h3 style="text-align: center;">项目常识栏</h3>',);
            $form->textarea('Notice.plan','术前准备')->rows(3);
            $form->textarea('Notice.nurse','术后护理')->rows(3);
            $form->textarea('Notice.sideEffects','副作用及处理')->rows(3);
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
