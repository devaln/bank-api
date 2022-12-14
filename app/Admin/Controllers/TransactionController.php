<?php

namespace App\Admin\Controllers;

use App\Models\Transaction;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TransactionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Transaction';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Transaction());

        $grid->column('id', __('Id'));
        $grid->column('debit_ammount', __('Debit ammount'));
        $grid->column('credit_ammount', __('Credit ammount'));
        $grid->column('Current_balance', __('Current balance'));
        $grid->column('description', __('Description'));
        $grid->column('customer_id', __('Customer id'));
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
        $show = new Show(Transaction::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('debit_ammount', __('Debit ammount'));
        $show->field('credit_ammount', __('Credit ammount'));
        $show->field('Current_balance', __('Current balance'));
        $show->field('description', __('Description'));
        $show->field('customer_id', __('Customer id'));
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
        $form = new Form(new Transaction());

        $form->decimal('debit_ammount', __('Debit ammount'));
        $form->decimal('credit_ammount', __('Credit ammount'));
        $form->decimal('Current_balance', __('Current balance'));
        $form->textarea('description', __('Description'));
        $form->number('customer_id', __('Customer id'));

        return $form;
    }
}
