<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Info;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class InfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Info(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('topic_id');
            $grid->column('site');
            $grid->column('price');
            $grid->column('methods');
            $grid->column('count');
            $grid->column('keep');
            $grid->column('narcosis');
            $grid->column('materials');
            $grid->column('lengthOfStay');
            $grid->column('removeTheTime');
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
        return Show::make($id, new Info(), function (Show $show) {
            $show->field('id');
            $show->field('topic_id');
            $show->field('site');
            $show->field('price');
            $show->field('methods');
            $show->field('count');
            $show->field('keep');
            $show->field('narcosis');
            $show->field('materials');
            $show->field('lengthOfStay');
            $show->field('removeTheTime');
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
        return Form::make(new Info(), function (Form $form) {
            $form->display('id');
            $form->text('topic_id');
            $form->text('site');
            $form->text('price');
            $form->text('methods');
            $form->text('count');
            $form->text('keep');
            $form->text('narcosis');
            $form->text('materials');
            $form->text('lengthOfStay');
            $form->text('removeTheTime');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
