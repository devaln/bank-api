<?php

namespace App\Admin\Controllers;

use App\Models\Transaction_Details;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TransactionDetailsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Transaction_Details';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Transaction_Details());

        $grid->column('id', __('Id'));
        $grid->column('process', __('Process'));
        $grid->column('sender_id', __('Sender id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('transaction_id', __('Transaction id'));
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
        $show = new Show(Transaction_Details::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('process', __('Process'));
        $show->field('sender_id', __('Sender id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('transaction_id', __('Transaction id'));
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
        $form = new Form(new Transaction_Details());

        $form->text('process', __('Process'));
        $form->number('sender_id', __('Sender id'));
        $form->number('customer_id', __('Customer id'));
        $form->number('transaction_id', __('Transaction id'));

        return $form;
    }
}
