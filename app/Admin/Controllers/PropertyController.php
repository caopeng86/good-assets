<?php

namespace App\Admin\Controllers;

use App\Models\Property;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PropertyController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('股权转让');
            $content->description('展示股权转让信息');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('股权转让');
            $content->description('展示股权转让信息');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('股权转让');
            $content->description('展示股权转让信息');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Property::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->image('图片')->display(function ($image) {
                return '<img src="' . $image . '" alt="" width="50" height="50" />';
            });

            $grid->title('标题');

            $grid->order('排序')->editable();

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Property::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', '标题');

            $form->image('image', '图片');

            $form->editor('body', '内容');

            $form->number('order', '排序');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
