<?php

namespace App\Admin\Controllers;

use App\Models\Master2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class Master2Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'マスタ同期管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Master2());



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
        $show = new Show(Master2::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Master2());
        
            $form->select('menu_class', '劇場選択')->options([
                '選択してください' , 'フード' , 'ドリンク' , 'その他'
            ]);

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
