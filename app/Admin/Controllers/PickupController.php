<?php

namespace App\Admin\Controllers;

use App\Models\Pickup;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PickupController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pickup';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Pickup());

        // 並び替えボタン
        $grid->column('並び替え')->default('<button type="button" class="btn btn-primary btn-xs change-num" style="margin-left:10px;">〓</button>');
        $grid->column('id', '並び順');
        $grid->column('menu_code', '商品コード');
        $grid->column('menu_name', '商品名');
        $grid->column('menu_price', '価格');
        $grid->column('self', 'セルフレジ');
        $grid->column('mobile', 'モバイルオーダー');
        $grid->column('', 'エリアセット');
        // 削除ボタン
        $grid->column('削除')->default('<button type="button" class="btn btn-danger btn-xs" style="font-weight:bold;padding:1px 7px;">×</button>');

        //　すべてのアクションを非表示
        $grid->disableActions();
        // チェックボックス非表示
        $grid->option('show_row_selector' , false);
        // 新規登録ボタン非表示
        $grid->disableCreateButton();

        // $grid->disableFilter();
    
        // チェックボックスの非表示
        $grid->disableRowSelector();
    
        // 行表示項目選択表示
        $grid->disableColumnSelector();
    
        // フィルタ（検索）ボタン
        $grid->disableTools();
    
        // CSV出力
        $grid->disableExport();

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
        $show = new Show(Pickup::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('menu_code', __('Menu code'));
        $show->field('menu_name', __('Menu name'));
        $show->field('menu_price', __('Menu price'));
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
        $form = new Form(new Pickup());

        $form->text('menu_code', __('Menu code'));
        $form->text('menu_name', __('Menu name'));
        $form->number('menu_price', __('Menu price'));
        $form->text('self', __('Self'));
        $form->text('mobile', __('Mobile'));

        return $form;
    }
}
