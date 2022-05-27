<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Introtdtion;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class IntrotdtionController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Introtdtion(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('topic_id');
            $grid->column('operationTime');
            $grid->column('swellingTime');
            $grid->column('removeTime');
            $grid->column('price');
            $grid->column('material');
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
        return Show::make($id, new Introtdtion(), function (Show $show) {
            $show->field('id');
            $show->field('topic_id');
            $show->field('operationTime');
            $show->field('swellingTime');
            $show->field('removeTime');
            $show->field('price');
            $show->field('material');
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
        return Form::make(new Introtdtion(), function (Form $form) {
            $form->display('id');
            $form->text('topic_id');
            $form->text('operationTime');
            $form->text('swellingTime');
            $form->text('removeTime');
            $form->text('price');
            $form->text('material');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
