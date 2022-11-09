<?php

namespace App\Admin\Controllers;

use App\Models\Topic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Category as CategoryModel;
use Illuminate\Http\Request;
use App\Admin\Repositories\Topic as RepTopic;

class TopicController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new RepTopic(['Category', 'Parent']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '标题')->width('10%')->limit(20, '...');
            $grid->column('seotitle', 'SEO标题')->width('10%')->limit(20, '...');
            $grid->column('dirname', '栏目地址')->badge();
            $grid->column('picture', '栏目缩略图')->image('/storage/', 50, 100);
            $grid->column('description', '栏目描述')->width('10%')->limit(20, '...');
            $grid->column('keyword', '栏目关键字')->width('10%')->limit(20, '...');
            $grid->column('category.title', '所属大栏目')->badge('danger');;
            $grid->column('parent.title', '父级标题')->display(function ($title) {
                if (!$title) {
                    return '无父级';
                } else {
                    return $title;
                }
            })->badge('success');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
            $grid->disableViewButton();
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                //当前ID
                $id = $actions->row->id;
                $url = route('showTopic', ['id' => $id]);
                $actions->append("<a href='$url' target='_blank'><i class='fa fa-eye'></i></a>");
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
        return Form::make(Topic::with(['Category', 'Info', 'Introtdtion', 'Commit', 'Notice']), function (Form $form) {
            $form->display('id');
            $form->text('title', '栏目标题')->creationRules('unique:topic,title|min:2', ['unique' => '标题不能重复', 'min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('seotitle', 'seo标题');
            $form->text('dirname', '栏目地址')->creationRules('unique:topic,dirname|min:2', ['unique' => '标题不能重复', 'min' => '最少需要2个字符'])->updateRules('min:2');
            $form->text('description', '栏目描述');
            $form->image('picture', '栏目图片')->uniqueName()->accept('jpg,png,gif,jpeg')->url('users/images')->autoUpload();
            $form->text('keyword', '关键词用[半角逗号]分割');
            $form->select('category_id', '所属栏目')->options(CategoryModel::all()->pluck('title', 'id'))->rules('required', ['required' => '所属栏目必选']);
            $form->select('parent_id', '所属二级栏目')->options(Topic::all()->pluck('title', 'id'))->default(0);
            $form->divider();
            $form->html('<h3 style="text-align: center;">项目基础信息栏</h3>',);
            $form->text('Info.site', '手术部位');
            $form->text('Info.price', '手术价格');
            $form->text('Info.methods', '手术方式');
            $form->text('Info.count', '治疗次数');
            $form->text('Info.keep', '效果维持');
            $form->text('Info.narcosis', '麻醉方式');
            $form->text('Info.materials', '手术材料');
            $form->text('Info.lengthofstay', '住院时间');
            $form->text('Info.removethetime', '拆线时间');
            $form->html('<h3 style="text-align: center;">项目介绍栏</h3>',);
            $form->text('Introtdtion.operationtime', '手术时长');
            $form->text('Introtdtion.swellingtime', '消肿时长');
            $form->text('Introtdtion.removetime', '恢复时长');
            $form->text('Introtdtion.price', '参考价格');
            $form->text('Introtdtion.material', '材料设备');
            $form->html('<h3 style="text-align: center;">项目常识栏</h3>',);
            $form->text('Commit.effect', '手术效果');
            $form->text('Commit.merit', '优点');
            $form->text('Commit.defect', '缺点');
            $form->text('Commit.crowd', '适应人群');
            $form->text('Commit.risk', '风险提示');
            $form->html('<h3 style="text-align: center;">项目常识栏</h3>',);
            $form->textarea('Notice.plan', '术前准备')->rows(3);
            $form->textarea('Notice.nurse', '术后护理')->rows(3);
            $form->textarea('Notice.sideeffects', '副作用及处理')->rows(3);
            $form->display('created_at');
            $form->display('updated_at');
            // 去掉`查看`checkbox
            if ($form->isEditing()) {
                $id = $form->getKey();
                $form->tools(function (Form\Tools $tools) use ($id) {
                    $tools->disableView();
                    $url = route('showTopic', ['id' => $id]);
                    $tools->append("<a class='btn btn-sm btn-success' href='$url'  target='_blank'><i class='fa fa-eye'></i>&nbsp;&nbsp;查看</a>");
                });
            }
            $form->footer(function ($footer) {
                $footer->disableViewCheck();

                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();

                // 去掉`继续创建`checkbox
                $footer->disableCreatingCheck();
            });
        });
    }
    public function api(Request $request)
    {
        $q = $request->get('q');
        return Topic::where('title', 'like', "%$q%")->whereNull('parent_id')->paginate(null, ['id', 'title as text']);
    }
}
