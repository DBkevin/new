<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Topic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

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
            $grid->column('title');
            $grid->column('description');
            $grid->column('keyword');
            $grid->column('category_id');
            $grid->column('parent_id');
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
        return Form::make(new Topic(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('description');
            $form->text('keyword');
            $form->text('category_id');
            $form->text('parent_id');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
