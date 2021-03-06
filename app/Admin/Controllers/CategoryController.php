<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class CategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '大栏目标题');
            $grid->column('dirname', '栏目地址');
            $grid->column('picture', '栏目缩略图')->image('http://cf.test/storage/', 23, 23);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
            $grid->disableViewButton();
        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Category(), function (Form $form) {
            $form->display('id');
            $form->text('title', '大栏目标题')->creationRules('unique:category,title|min:2', ['unique' => '大标题不能重复', 'min' => '最少需要2个字符']);
            $form->text('dirname', '前端访问路径')->creationRules('unique:category,dirname|min:2');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images')->autoUpload();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
