<?php

namespace App\Admin\Controllers;

use App\Models\SError;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SErrorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SError';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SError());

        // デフォルトフィルタ開く
        $grid->expandFilter();

        // フィルタを非表示
        $grid->disableFilter();



        // $grid->column('id', 'ID')->sortable();
        $grid->column('err_code', 'エラーコード')->sortable();
        $grid->column('err_title', 'タイトル')->sortable();
        $grid->column('err_contents', 'エラー内容')->sortable();
        $grid->column('err_handling', 'エラー対応')->sortable();

        //　すべてのアクションを非表示にする
        $grid->disableActions();

        // カラム切り替え項目を非表示
        $grid->disableColumnSelector();

        // 新規の非表示
        $grid->disableCreateButton();

        // チェックボックスの非表示
        $grid->disableRowSelector();

        // クイック検索
        $grid->quickSearch('err_code')->placeholder('キーワードを入力');

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
        $show = new Show(SError::findOrFail($id));

        // $show->field('id', __('Id'));
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
        $form = new Form(new SError());

        $form->text('err_code', __('Err code'));
        $form->text('err_title', __('Err title'));
        $form->text('err_contents', __('Err contents'));
        $form->text('err_handling', __('Err handling'));

        return $form;
    }
}
