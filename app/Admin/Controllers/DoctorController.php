<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Doctor;
use App\Models\Topic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class DoctorController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Doctor::with('tags'), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name', '医生姓名');
            $grid->column('title', '医生头衔');
            $grid->column('picture', '医生照片');
            $grid->column('age', '从业年限');
            $grid->column('introduce', '医生简介');
            $grid->column('school', '学历')->width('10%')->limit(20, '...');
            $grid->tags()->pluck('title')->label();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(Doctor::with('tags'), function (Form $form) {
            $form->display('id');
            $form->text('name', '医生姓名')->creationRules('unique:doctor,name|min:2', ['unique' => '医生姓名不能重复', 'min' => '最少需要2个字符'])->updateRules('min:2');
            $form->image('picture', '医生照片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images')->autoUpload();
            $form->text('title', '医生头衔');
            $form->text('age', '医生执业年限');
            $form->textarea('introduce', '医生简介');
            $form->text('school', '医生学历');
            $form->tags('tags', '擅长项目')->pluck('title', 'id')->options(Topic::without(['Category', 'Notice', 'Introtdtion', 'Info'])->whereNull('parent_id')->get());
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
