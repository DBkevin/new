<?php

namespace App\Admin\Controllers;

use App\Category;
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
        $grid->column('pic', __('栏目缩略图'))->image(env('APP_URL').'/storage',50,50);
        $grid->column('category_id', __('所属栏目'))->display(function($Category_id){
            return Category::find($Category_id)->title;
        })->label();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        // 去掉查看
        return $grid;
    }

   

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Topic());

        $form->text('title', __('栏目标题'))->rules(function ($form) {
            // 如果不是编辑状态，则添加字段唯一验证
            if (!$id = $form->model()->id) {
                return 'required|unique:topics,title';
            }
        });
        $form->text('slug', __('SEO标题'))->rules('required');
        $form->text('description', __('栏目描述'))->rules('required');
        $form->text('keywords', __('栏目关键词'))->rules('required');
        $form->image('pic', __('栏目缩略图'))->rules('required|image')->uniqueName();
        $form->select('category_id', '上级栏目')->options(Category::all()->pluck('title', 'id'))->rules('required', [
            'required' => '必须选择上级栏目'
        ]);

        return $form;
    }
}
