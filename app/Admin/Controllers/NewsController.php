<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('文章标题'));
        $show->field('description', __('文章描述'));
        $show->field('keywords', __('关键词'));
        $show->field('body', __('文章正文'));
        $show->field('viewCount', __('点击次数,可以不填'));
        $show->field('topic_id', __('所属栏目'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->text('title', __('文章标题'));
        $form->text('description', __('文章描述'));
        $form->text('keywords', __('文章关键词'));
        $form->textarea('body', __('正文'));
        $form->number('viewCount', __('点击次数,可不填'));
        $form->number('topic_id', __('所属栏目'));

        return $form;
    }
}
