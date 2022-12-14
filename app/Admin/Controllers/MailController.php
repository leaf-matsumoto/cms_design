<?php

namespace App\Admin\Controllers;

use App\Models\Mail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Mail';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Mail());

        $grid->column('id', __('Id'));
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
        $show = new Show(Mail::findOrFail($id));

        $show->field('id', __('Id'));
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
        $form = new Form(new Mail());

        $form = new Form(new Mail());

        // $form->select('theater_name', __('劇場選択'))->options([
        //     ''=>'' ,'T・ジョイ新潟万代'=>'T・ジョイ新潟万代' ,'T・ジョイ長岡'=>'T・ジョイ長岡' ,'新宿バルト9'=>'新宿バルト9', 'T・ジョイSEIBU大泉'=>'T・ジョイSEIBU大泉', 'T・ジョイPRINCE品川'=>'T・ジョイPRINCE品川',
        // ]);

        // $form->textarea('header_mail', 'ヘッダー')->rows(5);
        // $form->textarea('main_mail', '差込文章①')->rows(7)->placeholder('差込文章を入力');
        // $form->textarea('', '定型文')->rows(5)->value('横浜ブルク13&#13;&#10;事業者番号 ***_*****&#13;&#10;ここに定型文を入力する。')->disable();
        // $form->textarea('main_mail', '差込文章②')->rows(7)->placeholder('差込文章を入力');
        // $form->textarea('', '定型文')->rows(10)->value('POPセット塩&#13;&#10;ポップコーン塩R&#13;&#10;ペプシR&#13;&#10;ビアセット&#13;&#10;ポテチキ&#13;&#10;プレミアムモルツ&#13;&#10;')->disable();
        // $form->textarea('footer_mail', 'フッター')->rows(5);

        // $form->editor('detail', __('詳細'));

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
