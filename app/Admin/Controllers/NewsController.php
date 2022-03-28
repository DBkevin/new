<?php

namespace App\Admin\Controllers;

use App\News;
use App\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Admin;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章列表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('title', __('文章标题'));
        $grid->column('description', __('文章描述'));
        $grid->column('keywords', __('文章关键词'));
        $grid->column('body', __('文章详情'));
        $grid->column('viewCount', __('查看次数'));
        $grid->column('topic_id', __('所属栏目'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->select('topic_id')->options(Topic::all()->pluck('title', 'id'))->rules('required');
        $form->text('title', __('文章标题'))->rules('required');
        $form->text('description', __('文章描述'))->rules('required');
        $form->text('keywords', __('文章关键词'))->rules('required');
        $form->editor('body', __('正文'));
        $form->number('viewCount', __('点击次数,可不填'));
        return $form;
    }
}
Admin::script(' $(document).ready(function(){
     $(".wangEditor-txt").height(400);
 });');
