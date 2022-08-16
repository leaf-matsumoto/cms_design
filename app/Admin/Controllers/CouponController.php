<?php

namespace App\Admin\Controllers;

use App\Models\Coupon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CouponController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Coupon';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coupon());

        $grid->column('K_coupon_id', 'KINEZOクーポンID')->sortable();
        $grid->column('coupon_code', 'クーポン名')->sortable(); 
        $grid->column('coupon_discount', '割引金額')->sortable(); 
        $grid->column('coupon_line', '閾値')->sortable(); 
        $grid->column('mobile', '商品登録')->sortable();  
        
        $grid->column('status', 'ステータス')->icon([
            0 => 'exclamation-circle',
            1 => '',
        ], $default = '')->color('#ff0000')->sortable(); ;


        //　すべてのアクションを非表示
        $grid->disableActions();

        // フィルタを非表示
        $grid->disableFilter();

        // エクスポートのひ表示
        $grid->disableExport();

        // 新規の非表示
        $grid->disableCreateButton();

        // チェックボックス非表示
        $grid->option('show_row_selector' , false);

        // カラム切り替え項目を非表示
        $grid->disableColumnSelector();

        // クイック検索
        $grid->quickSearch('err_code')->placeholder('クーポンIDまたはクーポン名を入力');


        // フィルタ内検索項目
        // $grid->filter(function($filter){
        //     // デフォルトの検索ボックスを非表示にする
        //     $filter->disableIdFilter();
        //     // 検索ボックスの追加
        //     $filter->like('name', 'キーワード');
        // });

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
        $show = new Show(Coupon::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('K_coupon_id', __('K coupon id'));
        $show->field('coupon_code', __('Coupon code'));
        $show->field('coupon_discount', __('Coupon discount'));
        $show->field('coupon_line', __('Coupon line'));
        $show->field('self', __('Self'));
        $show->field('mobile', __('Mobile'));
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
        $form = new Form(new Coupon());

        $form->setWidth(8, 2)->text('K_coupon_id', 'クーポンID')->disable();
        $form->text('coupon_code', 'クーポン名')->disable(); 
        $form->text('coupon_discount', '割引金額')->disable(); 
        $form->text('coupon_line', '閾値')->placeholder('金額を整数で入力'); 
        // $form->text('status', 'フラグ'); 

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
