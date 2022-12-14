<?php

namespace App\Admin\Controllers;

use App\Models\Salary;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SalaryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Salary';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Salary());

        $grid->column('id', __('Id'));
        $grid->column('ammount', __('Ammount'));
        $grid->column('process', __('Process'));
        $grid->column('employee_id', __('Employee id'));
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
        $show = new Show(Salary::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ammount', __('Ammount'));
        $show->field('process', __('Process'));
        $show->field('employee_id', __('Employee id'));
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
        $form = new Form(new Salary());

        $form->decimal('ammount', __('Ammount'));
        $form->text('process', __('Process'));
        $form->number('employee_id', __('Employee id'));
        $form->number('transaction_id', __('Transaction id'));

        return $form;
    }
}
