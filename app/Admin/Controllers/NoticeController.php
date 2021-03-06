<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Notice;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NoticeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Notice(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('topic_id');
            $grid->column('plan');
            $grid->column('nurse');
            $grid->column('sideEffects');
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
        return Show::make($id, new Notice(), function (Show $show) {
            $show->field('id');
            $show->field('topic_id');
            $show->field('plan');
            $show->field('nurse');
            $show->field('sideEffects');
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
        return Form::make(new Notice(), function (Form $form) {
            $form->display('id');
            $form->text('topic_id');
            $form->text('plan');
            $form->text('nurse');
            $form->text('sideEffects');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
