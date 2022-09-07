<?php

namespace App\Admin\Controllers;

use App\Models\NewContent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'NewContent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NewContent());

        $grid->column('id', __('Id'));
        $grid->column('theater_name', __('Theater name'));
        $grid->column('start_day', __('Start day'));
        $grid->column('end_day', __('End day'));
        $grid->column('news_contents', __('News contents'));
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
        $show = new Show(NewContent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('theater_name', __('Theater name'));
        $show->field('start_day', __('Start day'));
        $show->field('end_day', __('End day'));
        $show->field('news_contents', __('News contents'));
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
        $form = new Form(new NewContent());

        // $form->select('theater_name', __('劇場選択'))->options([
        //     ''=>'' ,'T・ジョイ新潟万代'=>'T・ジョイ新潟万代' ,'T・ジョイ長岡'=>'T・ジョイ長岡' ,'新宿バルト9'=>'新宿バルト9', 'T・ジョイSEIBU大泉'=>'T・ジョイSEIBU大泉', 'T・ジョイPRINCE品川'=>'T・ジョイPRINCE品川',
        // ]);

        $form->date('start_day', __('掲載開始日'))->format('YYYY-MM-DD')->placeholder('掲載開始日')->setWidth(2, 2);
        $form->text('start_time', __('掲載開始時間'))->placeholder('半角4桁で入力')->setWidth(1, 2);
        $form->date('end_day', __('掲載終了日'))->format('YYYY-MM-DD')->placeholder('掲載終了日')->setWidth(2, 2);
        $form->text('end_time', __('掲載終了時間'))->placeholder('半角4桁で入力')->setWidth(1, 2);

        $form->textarea('news_contents', __('お知らせ内容'))->rows(10)->placeholder('お知らせ内容を入力');

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
