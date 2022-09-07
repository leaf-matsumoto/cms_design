<?php

namespace App\Admin\Controllers;

use App\Models\Qrcode;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Qrcodecontroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Qrcode';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Qrcode());

        $grid->column('id', __('Id'));
        $grid->column('theater_name', __('Theater name'));
        $grid->column('qrcode', __('Qrcode'));
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
        $show = new Show(Qrcode::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('theater_name', __('Theater name'));
        $show->field('qrcode', __('Qrcode'));
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
        $form = new Form(new Qrcode());

        //劇場選択
        // $form->select('theater_name', __('劇場選択'))->options([
        //     ''=>'' ,'T・ジョイ新潟万代'=>'T・ジョイ新潟万代' ,'T・ジョイ長岡'=>'T・ジョイ長岡' ,'新宿バルト9'=>'新宿バルト9', 'T・ジョイSEIBU大泉'=>'T・ジョイSEIBU大泉', 'T・ジョイPRINCE品川'=>'T・ジョイPRINCE品川',
        // ]);

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
