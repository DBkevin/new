<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Commit;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CommitController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Commit(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('topic_id');
            $grid->column('effect');
            $grid->column('merit');
            $grid->column('defect');
            $grid->column('crowd');
            $grid->column('risk');
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
        return Show::make($id, new Commit(), function (Show $show) {
            $show->field('id');
            $show->field('topic_id');
            $show->field('effect');
            $show->field('merit');
            $show->field('defect');
            $show->field('crowd');
            $show->field('risk');
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
        return Form::make(new Commit(), function (Form $form) {
            $form->display('id');
            $form->text('topic_id');
            $form->text('effect');
            $form->text('merit');
            $form->text('defect');
            $form->text('crowd');
            $form->text('risk');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
