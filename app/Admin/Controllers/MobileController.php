<?php

namespace App\Admin\Controllers;

use App\Models\Mobile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MobileController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Mobile';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Mobile());

        $grid->column('id', __('Id'));
        $grid->column('theater_name', __('Theater name'));
        $grid->column('start_day', __('Start day'));
        $grid->column('end_day', __('End day'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Mobile::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('theater_name', __('Theater name'));
        $show->field('start_day', __('Start day'));
        $show->field('end_day', __('End day'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Mobile());

        // $form->text('theater_name', __('Theater name'));
        // $form->text('start_day', __('Start day'));
        // $form->text('end_day', __('End day'));

        // 'データベースに書き込む値' =>'選択肢に表示される値'　※アローを使わない場合は数値が書き込まれる
        $form->radio('self', '販売可否')->options([
            '販売可'=>'販売可' , '販売不可'=>'販売不可'
        ]);


        // $form->time('start_day', '仮オーダー有効時間');
        $form->time('start_day', '仮オーダー有効時間( 分 )')->format('mm')->placeholder('分で値を入力');
        // $form->text('end_day', '販売時間');


        $form->tools(function (Form\Tools $tools) {
            // 右上の表示ボタンを非表示
            $tools->disableView();
            // 右上の削除ボタンを非表示
            $tools->disableDelete();
            // 管理ボタンを非表示
            $tools->disableList();

        });

        $form->footer(function ($footer) {
            // 表示のチェックボックスを非表示
            $footer->disableViewCheck();
            // 編集を続けるを非表示
            $footer->disableEditingCheck();
            //  作成を続行するを非表示
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}
