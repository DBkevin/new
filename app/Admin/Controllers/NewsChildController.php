<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\NewsChild;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class NewsChildController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new NewsChild(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('titile');
            $grid->column('body');
        
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
        return Show::make($id, new NewsChild(), function (Show $show) {
            $show->field('id');
            $show->field('titile');
            $show->field('body');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new NewsChild(), function (Form $form) {
            $form->display('id');
            $form->text('titile');
            $form->text('body');
        });
    }
}
