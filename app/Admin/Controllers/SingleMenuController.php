<?php

namespace App\Admin\Controllers;

use App\Models\SingleMenu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SingleMenuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SingleMenu';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SingleMenu());

        // デフォルトフィルタ開く
        $grid->expandFilter();

        $grid->column('menu_code', '商品コード')->sortable();
        $grid->column('menu_type', '商品分類')->sortable();
        $grid->column('menu_name', '表示名')->sortable();
        $grid->column('menu_price', '商品単価')->sortable();
        $grid->column('self', 'セルフレジ')->sortable();
        $grid->column('mobile', 'モバイルオーダー')->sortable();
        $grid->column('status', 'ステータス')->icon([
            0 => 'exclamation-circle',
            1 => '',
        ], $default = '')->color('#ff0000')->sortable();

        // アクション（操作）一括非表示　※最終非表示
        $grid->disableActions();

        // 新規登録ボタン非表示
        $grid->disableCreateButton();
    
        // $grid->disableFilter();
    
        // チェックボックスの非表示
        $grid->disableRowSelector();
    
        // 行表示項目選択表示
        $grid->disableColumnSelector();
    
        // フィルタ（検索）ボタン
        // $grid->disableTools();
    
        // CSV出力
        $grid->disableExport();
    
        // アクション（操作）個別非表示
        // $grid->actions(function (Grid\Displayers\Actions $actions) {
        //     $actions->disableView();
        //     $actions->disableEdit();
        //     $actions->disableDelete();
        // });




        // 検索項目の追加
        $grid->filter(function($filter){

            // デフォルトの検索ボックスを削除
            $filter->disableIdFilter();
            // 検索項目追加


            $filter->column(1/4, function ($filter) {
                $filter->equal('theater_name','セルフレジ')->select(['0' => 'value00','0' => 'value00']);
                // $filter->equal('theater_name','商品分類')->select(['0' => 'value00','0' => 'value00']);
            });

            $filter->column(1/4, function ($filter) {
                $filter->equal('theater_name','モバイルオーダー')->select(['0' => 'value00','0' => 'value00']);
                // $filter->like('menu_name', 'キーワード')->placeholder('商品コードまたは商品名を入力');
            });

            $filter->column(1/4, function ($filter) {
                // $filter->equal('theater_name','セルフレジ')->select(['0' => 'value00','0' => 'value00']);
                $filter->equal('theater_name','商品分類')->select(['0' => 'value00','0' => 'value00']);
            });

            $filter->column(1/4, function ($filter) {
                // $filter->equal('theater_name','モバイルオーダー')->select(['0' => 'value00','0' => 'value00']);
                $filter->like('menu_name', 'キーワード')->placeholder('商品コードまたは商品名を入力');
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
        $show = new Show(SingleMenu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('menu_code', __('Menu code'));
        $show->field('menu_type', __('Menu type'));
        $show->field('basic_menu_name', __('Basic menu name'));
        $show->field('receipt_menu_name', __('Receipt menu name'));
        $show->field('theater_name', __('Theater name'));
        $show->field('order_menu_name', __('Order menu name'));
        $show->field('menu_name', __('Menu name'));
        $show->field('menu_price', __('Menu price'));
        $show->field('self', __('Self'));
        $show->field('mobile', __('Mobile'));
        $show->field('menu_class', __('Menu class'));
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
        $form = new Form(new SingleMenu());
        



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







