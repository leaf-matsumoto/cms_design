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

        // デフォルトフィルタ開く
        $grid->expandFilter();

        $grid->column('menu_code', '商品コード')->sortable();
        $grid->column('menu_type', '商品分類')->sortable();
        $grid->column('p_menu_name', '商品表示名')->sortable();
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

        $form->text('theater_name', '劇場名')->icon('fa-video-camera')->disable()->value('梅田ブルク7');
        // $form->text('menu_type', '劇場運用反映コード')->icon('fa-video-camera')->setWidth(2, 2)->disable()->value('')->value('A100000000');
        $form->text('menu_code', '商品コード')->icon('fa fa-barcode')->setWidth(2, 2)->disable()->value('A200000100');
        $form->text('receipt_menu_name', '商品レシート名')->disable()->value('POPセット塩')->icon('fa fa-coffee');
        $form->text('basic_menu_name', '基本商品名')->disable()->value('POPセット塩')->icon('fa fa-coffee');
        $form->text('shouhinbunrui', '商品分類')->disable()->value('セット')->icon('fa fa-coffee');
        $form->text('menu_code', '商品単価')->setWidth(2, 2)->disable()->icon('fa fa-jpy')->value('800');       
        // $form->text('setjunn', 'セット順番号')->setWidth(2, 2)->disable()->icon('fa fa-minus')->value('1');
        // $form->text('menu_code', '連番')->setWidth(2, 2)->disable()->icon('fa fa-minus')->value('1');
        $form->checkbox('menu_type', '在庫フラグ')->options([
            1 => ' '
        ])->disable();
        // 小商品１
        $form->select('setunnyoukategori', 'セット運用カテゴリー ①')->options([
            '0'=>'選択してください' , '1'=>'ドリンク' , '2'=>'サイズ変更/商品変更' , '3'=>'フレーバー' , '4'=>'オプション' , '5'=>'特典'
        ])->setWidth(3, 2);
        $form->textarea('c_menu_name', __('子商品情報 ①'))->rows(2)->placeholder('小商品情報を表示')->disable()->value(
            "A000000110&nbsp;&nbsp;ペプシ\nA000000210&nbsp;&nbsp;ペプシゼロ\nA000000310&nbsp;&nbsp;メロンソーダ"
        );
        // 小商品２
        $form->select('setunnyoukategori', 'セット運用カテゴリー ②')->options([
            '0'=>'選択してください' , '1'=>'ドリンク' , '2'=>'サイズ変更/商品変更' , '3'=>'フレーバー' , '4'=>'オプション' , '5'=>'特典'
        ])->setWidth(3, 2);
        $form->textarea('c_menu_name', __('子商品 ②'))->rows(2)->placeholder('小商品情報を表示')->disable();
        // 小商品３
        $form->select('setunnyoukategori', 'セット運用カテゴリー ③')->options([
            '0'=>'選択してください' , '1'=>'ドリンク' , '2'=>'サイズ変更/商品変更' , '3'=>'フレーバー' , '4'=>'オプション' , '5'=>'特典'
        ])->setWidth(3, 2);
        $form->textarea('c_menu_name', __('子商品 ③'))->rows(2)->placeholder('小商品情報を表示')->disable();

        $form->text('basic_menu_name', 'オーダー管理名')->required()->placeholder('オーダー管理名')->icon('fa fa-shopping-basket');
        $form->text('basic_menu_name', 'オーダー管理グループ名')->required()->placeholder('オーダー管理グループ名')->icon('fa fa-shopping-basket');
        $form->text('basic_menu_name', 'オーダー管理グループサブ表示名')->required()->placeholder('オーダー管理グループサブ表示名')->icon('fa fa-shopping-basket');
        $form->text('basic_menu_name', '商品表示名')->required()->placeholder('商品表示名')->icon('fa fa-coffee');
        $form->text('basic_menu_name', '商品グループ表示名')->required()->placeholder('商品グループ表示名')->icon('fa fa-coffee');
        $form->text('basic_menu_name', '商品グループサブ表示名')->required()->placeholder('商品グループサブ表示名')->icon('fa fa-coffee');
        $form->text('kounyuuseigennsuu', '購入制限数')->setWidth(2, 2)->required()->placeholder('購入で制限数')->icon('fa fa-hand-stop-o');
        
        $form->checkbox('kikanngenntei', '期間限定')->options([
            1 => ' '
        ])->required();
        // $form->dateRange('kaisibi', 'shuuryoubi', '販売期間')->required();

        $form->date('kaisibi', '販売開始日')->required()->placeholder('開始日');
        $form->date('shuuryoubi', '販売終了日')->required()->placeholder('終了日');

        $form->select('shouhinnjunbibasho', '商品準備場所')->options([
            0 => '選択してください', 1 => 'フード', '2' => 'セット', '3' => 'オプション'
        ])->setWidth(3, 2);


        
        $form->radio('mobileorder', 'モバイルオーダー')->options([
            '0'=>'販売可' , '1'=>'販売不可' , '2'=>'販売停止' , '3'=>'売り切れ'
        ])->default('1');
        $form->radio('selforder', 'セルフオーダー')->options([
            '0'=>'販売可' , '1'=>'販売不可' , '2'=>'販売停止' , '3'=>'売り切れ'
        ])->default('1');



        $form->checkbox('aruko-ru', 'アルコール')->options([
            1 => ' '
        ]);

        $form->file('shouhingazou', '商品画像')->setWidth(3, 2);;

        $form->textarea('c_menu_name', __('商品説明'))->rows(3)->placeholder('商品の説明を入力');

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
