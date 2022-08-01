<?php

namespace App\Admin\Controllers;

use App\Models\MError;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MErrorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'モバイルエラー一覧';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MError());
        // チェックボックス非表示
        $grid->option('show_row_selector' , false);

        $grid->column('id', 'ID');
        $grid->column('err_code', 'エラーコード');
        $grid->column('err_contents', 'エラー内容');
        $grid->column('err_handling', 'エラー対応');
        
        // すべてのアクションを非表示
        $grid->disableActions();

        // カラム切り替え項目を非表示
        $grid->disableColumnSelector();

        // 新規の非表示
        $grid->disableCreateButton();

        // フィルタ内検索項目
        $grid->filter(function($filter){
            // デフォルトの検索ボックスを非表示にする
            $filter->disableIdFilter();
            // 検索ボックスの追加
            $filter->like('name', 'キーワード');
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
        $show = new Show(MError::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('err_code', __('Err code'));
        $show->field('err_contents', __('Err contents'));
        $show->field('err_handling', __('Err handling'));
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
        $form = new Form(new MError());

        $form->text('err_code', 'エラーコード');
        $form->textarea('err_contents', 'エラー内容')->rows(5);
        $form->textarea('err_handling', 'エラー対応')->rows(5);

        return $form;
    }
}
