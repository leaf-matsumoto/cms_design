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

        $grid->column('id', __('Id'));
        $grid->column('member_id', __('Member id'));
        $grid->column('order_id', __('Order id'));
        $grid->column('order_day', __('Order day'));
        $grid->column('order_content', __('Order content'));
        $grid->column('order_status', __('Order status'));
        $grid->column('pay_situation', __('Pay situation'));
        $grid->column('order_situation', __('Order situation'));
        $grid->column('order_kinds', __('Order kinds'));
        $grid->column('call_num', __('Call num'));
        $grid->column('receipt_num', __('Receipt num'));
        $grid->column('tentative_order', __('Tentative order'));
        $grid->column('product_order', __('Product order'));
        $grid->column('menu_day', __('Menu day'));
        $grid->column('call_day', __('Call day'));
        $grid->column('self', __('Self'));
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
        $show = new Show(OrderMgt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('member_id', __('Member id'));
        $show->field('order_id', __('Order id'));
        $show->field('order_day', __('Order day'));
        $show->field('order_content', __('Order content'));
        $show->field('order_status', __('Order status'));
        $show->field('pay_situation', __('Pay situation'));
        $show->field('order_situation', __('Order situation'));
        $show->field('order_kinds', __('Order kinds'));
        $show->field('call_num', __('Call num'));
        $show->field('receipt_num', __('Receipt num'));
        $show->field('tentative_order', __('Tentative order'));
        $show->field('product_order', __('Product order'));
        $show->field('menu_day', __('Menu day'));
        $show->field('call_day', __('Call day'));
        $show->field('self', __('Self'));
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
        $form = new Form(new OrderMgt());

        $form->text('member_id', __('Member id'));
        $form->text('order_id', __('Order id'));
        $form->text('order_day', __('Order day'));
        $form->text('order_content', __('Order content'));
        $form->text('order_status', __('Order status'));
        $form->text('pay_situation', __('Pay situation'));
        $form->text('order_situation', __('Order situation'));
        $form->text('order_kinds', __('Order kinds'));
        $form->text('call_num', __('Call num'));
        $form->text('receipt_num', __('Receipt num'));
        $form->text('tentative_order', __('Tentative order'));
        $form->text('product_order', __('Product order'));
        $form->text('menu_day', __('Menu day'));
        $form->text('call_day', __('Call day'));
        $form->text('self', __('Self'));

        return $form;
    }
}
