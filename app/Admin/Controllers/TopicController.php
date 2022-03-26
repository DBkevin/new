<?php

namespace App\Admin\Controllers;

use App\Topic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TopicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '具体二级栏目';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Topic());
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->column('id', __('Id'));
        $grid->column('title', __('栏目标题'));
        $grid->column('slug', __('SEO标题'));
        $grid->column('description', __('栏目描述'));
        $grid->column('keywords', __('关键词'));
        $grid->column('pic', __('栏目缩略图'));
        $grid->column('category_id', __('所属栏目'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        // 去掉查看
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
        $show = new Show(Topic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('keywords', __('Keywords'));
        $show->field('pic', __('Pic'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Topic());

        $form->text('title', __('栏目标题'));
        $form->textarea('slug', __('SEO标题'));
        $form->text('description', __('栏目描述'));
        $form->text('keywords', __('栏目关键词'));
        $form->textarea('pic', __('pic'));
        $form->number('category_id', __('上级栏目'));

        return $form;
    }
}
