<?php

namespace App\Admin\Controllers;

use App\Models\SetMenu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SetMenuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SetMenu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SetMenu());

        $grid->column('menu_code', '商品コード')->sortable();
        $grid->column('menu_type', '商品分類')->sortable();
        $grid->column('menu_name', '商品名')->sortable();
        $grid->column('menu_price', '商品単価')->sortable();
        $grid->column('self', 'セルフオーダー')->sortable();
        $grid->column('mobile', 'モバイルオーダー')->sortable();

        // アクション（操作）一括非表示　※最終非表示
        // $grid->disableActions();

        // 新規登録ボタン非表示
        $grid->disableCreateButton();
    
        // チェックボックスの非表示
        $grid->disableRowSelector();
    
        // 行表示項目選択表示
        $grid->disableColumnSelector();
    
        // CSV出力
        $grid->disableExport();


        // 検索項目の追加
        $grid->filter(function($filter){
            // デフォルトの検索ボックスを削除
            $filter->disableIdFilter();
            // 検索項目追加
            $filter->equal('theater_name','劇場選択')->select(['0' => 'value00','0' => 'value00']);
            $filter->equal('theater_name','商品分類')->select(['0' => 'value00','0' => 'value00']);
            $filter->equal('theater_name','モバイルオーダー')->select(['0' => 'value00','0' => 'value00']);
            $filter->equal('theater_name','セルフレジ')->select(['0' => 'value00','0' => 'value00']);
            $filter->like('menu_name', 'キーワード')->placeholder('キーワードを入力してください');
        });

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
        $show = new Show(SetMenu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('menu_code', __('Menu code'));
        $show->field('menu_type', __('Menu type'));
        $show->field('basic_menu_name', __('Basic menu name'));
        $show->field('receipt_menu_name', __('Receipt menu name'));
        $show->field('theater_name', __('Theater name'));
        $show->field('order_menu_name', __('Order menu name'));
        $show->field('p_menu_name', __('P menu name'));
        $show->field('c_menu_name', __('C menu name'));
        $show->field('menu_price', __('Menu price'));
        $show->field('self', __('Self'));
        $show->field('mobile', __('Mobile'));
        $show->field('menu_class', __('Menu class'));
        $show->field('limited_time', __('Limited time'));
        $show->field('start_sale', __('Start sale'));
        $show->field('end_sale', __('End sale'));
        $show->field('menu_img', __('Menu img'));
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
        $form = new Form(new SetMenu());

        $form->text('menu_code', '商品コード')->disable();
        $form->text('menu_type', '商品分類')->disable();
        $form->text('basic_menu_name', '基本商品名')->disable();
        $form->text('receipt_menu_name', '商品レシート名')->disable();
        $form->text('order_menu_name', 'オーダー管理名');
        $form->text('p_menu_name', '表示名');
        // 小商品１
        $form->textarea('c_menu_name', __('子商品 ①'))->rows(3)->placeholder('小商品情報を表示');
        // 小商品２
        $form->textarea('c_menu_name', __('子商品 ②'))->rows(3)->placeholder('小商品情報を表示');;
        // 小商品３
        $form->textarea('c_menu_name', __('子商品 ③'))->rows(3)->placeholder('小商品情報を表示');;
        $form->currency('menu_price', '商品単価')->symbol('￥')->digits(0)->disable();
        // 'データベースに書き込む値' =>'選択肢に表示される値'　※アローを使わない場合は数値が書き込まれる
        $form->radio('self', 'セルフレジ')->options([
            '販売可'=>'販売可' , '販売不可'=>'販売不可' , '販売停止'=>'販売停止' , '売り切れ'=>'売り切れ'
        ]);
        $form->radio('mobile', 'モバイルオーダー')->options([
            '販売可'=>'販売可' , '販売不可'=>'販売不可' , '販売停止'=>'販売停止' , '売り切れ'=>'売り切れ'
        ]);
        $form->select('menu_class', '商品準備場所')->options([
            '選択してください' , 'フード' , 'ドリンク' , 'その他'
        ]);
        // これが影響し新規登録ができない？
        $form->checkbox('theater_name', '期間限定')->options([1 => ' ']);
        $form->date('start_sale', '販売開始日');
        $form->date('end_sale', '販売終了日');
        $form->image('menu_img','商品画像');

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
