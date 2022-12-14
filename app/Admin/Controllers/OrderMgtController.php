<?php

namespace App\Admin\Controllers;

use App\Models\OrderMgt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderMgtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OrderMgt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderMgt());

        // デフォルトフィルタ開く
        $grid->expandFilter();

        $grid->column('order_id', 'オーダーID')->sortable();
        $grid->column('member_id', '会員ID')->sortable();
        $grid->column('receipt_num', 'レシートNo')->sortable();
        $grid->column('order_day', '本オーダー日時')->sortable();
        // $grid->column('order_content', '注文内容'); //非表示
        // $grid->column('order_status', '販売状況'); //非表示
        $grid->column('pay_situation', '決済ステータス')->sortable();
        $grid->column('order_situation', '注文ステータス')->sortable();
        $grid->column('pay_kinds', '決済種別'); //非表示
        $grid->column('order_kinds', '販売区分')->sortable();
        $grid->column('call_num', '呼出番号')->sortable();
        // $grid->column('tentative_order', '仮オーダー日時'); //非表示
        // $grid->column('product_order', '本オーダー日時'); //非表示
        // $grid->column('menu_day', '準備日時'); //非表示
        // $grid->column('call_day', '呼出日時'); //非表示
        // $grid->column('self', '完了日時'); //非表示



        // すべてのアクションを非表示
        $grid->disableActions();

        // カラム切り替え項目を非表示
        $grid->disableColumnSelector();
        
        // 新規の非表示
        $grid->disableCreateButton();

        // チェックボックスの非表示
        $grid->disableRowSelector();

        // 検索項目の追加
        $grid->filter(function($filter){

            // デフォルトの検索ボックスを削除
            $filter->disableIdFilter();
            // 検索項目追加

            $filter->column(1/3, function ($filter) {
                $filter->equal('theater_name','決済ステータス')->select(['0' => 'value00','0' => 'value00']);
                $filter->equal('theater_name','販売区分')->select(['0' => 'value00','0' => 'value00']);
                $filter->like('menu_name', '会員ID')->placeholder('会員IDを入力してください');
            });

            $filter->column(1/3, function ($filter) {
                $filter->equal('theater_name','決済種別')->select(['0' => 'value00','0' => 'value00']);
                $filter->like('menu_name', '商品名')->placeholder('商品名を入力してください');
            });

            $filter->column(1/3, function ($filter) {
                $filter->equal('theater_name','注文ステータス')->select(['0' => 'value00','0' => 'value00']);
                $filter->like('menu_name', 'レシートNo')->placeholder('レシートNoを入力してください'); 
                
                // set datetime field type
                $filter->between('column', '注文日')->date();

                // set time field type
                $filter->between('column', '注文時間')->time();
                      
            });

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
        $show = new Show(OrderMgt::findOrFail($id));

        // $show->field('id', __('Id'));
        $show->field('member_id', '会員ID');
        // $show->field('order_day', '本オーダー日時');
        $show->field('receipt_num', 'レシートNo');
        $show->field('order_content', '注文内容');
        // $show->field('order_status', 'オーダーステータス');
        $show->field('pay_situation', '決済ステータス');
        $show->field('pay_kinds', '決済種別'); //追加必要
        $show->field('order_situation', '注文ステータス');
        $show->field('order_kinds', '販売区分');
        $show->field('call_num', '呼出番号');
        $show->field('tentative_order', '仮オーダー日時');
        $show->field('product_order', '本オーダー日時');
        $show->field('menu_day', '準備日時');
        $show->field('call_day', '呼出日時');
        $show->field('self', '完了日時');
        // $show->field('created_at', '登録日');
        // $show->field('updated_at', '更新日');

        $show->panel()->tools(function ($tools) {
            $tools->disableEdit();
            // $tools->disableList();
            $tools->disableDelete();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrderMgt());

        $form->text('order_id', 'オーダーID');
        $form->text('member_id', '会員ID');
        $form->text('receipt_num', 'レシートNo');
        $form->datetime('order_day', '本オーダー日時')->format('YYYY/MM/DD HH:mm ');
        $form->text('order_content', '注文内容');
        $form->text('order_status', '販売状況');
        $form->text('pay_situation', '決済ステータス');
        $form->text('pay_kinds', '決済種別'); //追加必要    
        $form->text('order_situation', '注文ステータス');
        $form->text('order_kinds', '販売区分');
        $form->text('call_num', '呼出番号');
        $form->datetime('tentative_order', '仮オーダー日時')->format('YYYY/MM/DD HH:mm ');
        $form->datetime('product_order', '本オーダー日時')->format('YYYY/MM/DD HH:mm ');
        $form->datetime('menu_day', '準備日時')->format('YYYY/MM/DD HH:mm ');
        $form->datetime('call_day', '呼出日時')->format('YYYY/MM/DD HH:mm ');
        $form->datetime('self', '完了日時')->format('YYYY/MM/DD HH:mm ');

        return $form;
    }
}
