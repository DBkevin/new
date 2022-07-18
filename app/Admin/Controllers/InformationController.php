<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Information;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class InformationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Information(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('seotitle');
            $grid->column('discription');
            $grid->column('keywords');
            $grid->column('body');
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
        return Show::make($id, new Information(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('seotitle');
            $show->field('discription');
            $show->field('keywords');
            $show->field('body');
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
        return Form::make(new Information(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('seotitle');
            $form->text('discription');
            $form->text('keywords');
            $form->text('body');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
