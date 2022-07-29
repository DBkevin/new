<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use App\Models\Topic;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\NewsChild;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(['Child', 'Topic']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('keywords')->width('10%')->limit(20, '...');
            $grid->column('description')->width('10%')->limit(20, '...');
            $grid->column('picture', '栏目缩略图')->image('http://cf.test/storage/', 50, 100);
            $grid->column('Topic.title', '所属栏目')->badge('success');
            $grid->column('count');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableViewButton();
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
        return Form::make(News::with(['Child']), function (Form $form) {
            $form->display('id');
            $form->text('title', "标题")->creationRules('unique:news,title|min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->select('topic_id', '所属项目')->options(function ($id) {
                $topics = Topic::find($id);
                if ($topics) {
                    return [$topics->id => $topics->title];
                }
            })->ajax('gettopic')->rules('required');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images/article')->autoUpload();
            $form->text('description', "文章导读")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('keywords', "关键词用[半角逗号]分割")->creationRules('min:2', ['min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('count');
            $form->hasMany('Child', '文章详情最少3个', function (Form\NestedForm $form) {
                $form->text('title', "标题:如注射瘦脸除皱生效方法")->rules('required');
                $form->editor('body', '内容:既标题对应的内容')->rules('required');
            });
            $form->display('created_at');
            $form->display('updated_at');
            $form->saving(function (Form $form) {
                if ($form->count == 0) {
                    $form->count = random_int(25, 9999);
                }
            });
        });
    }
}
