<?php

namespace App\Admin\Controllers;

use App\Models\Account_type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AccountTypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Account_type';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Account_type());

        $grid->column('id', __('Id'));
        $grid->column('type', __('Type'));
        $grid->column('loan_intrest_rate', __('Loan intrest rate'));
        $grid->column('saving_intrest_rate', __('Saving intrest rate'));
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
        $show = new Show(Account_type::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type', __('Type'));
        $show->field('loan_intrest_rate', __('Loan intrest rate'));
        $show->field('saving_intrest_rate', __('Saving intrest rate'));
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
        $form = new Form(new Account_type());

        $form->text('type', __('Type'));
        $form->decimal('loan_intrest_rate', __('Loan intrest rate'));
        $form->decimal('saving_intrest_rate', __('Saving intrest rate'));
        $form->number('customer_id', __('Customer id'));

        return $form;
    }
}
