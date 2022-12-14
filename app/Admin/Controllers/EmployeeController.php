<?php

namespace App\Admin\Controllers;

use App\Models\Employee;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EmployeeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Employee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Employee());

        $grid->column('id', __('Id'));
        $grid->column('education', __('Education'));
        $grid->column('date_of_joining', __('Date of joining'));
        $grid->column('work_status', __('Work status'));
        $grid->column('designation', __('Designation'));
        $grid->column('official_email', __('Official email'));
        $grid->column('departmentable_type', __('Departmentable type'));
        $grid->column('departmentable_id', __('Departmentable id'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Employee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('education', __('Education'));
        $show->field('date_of_joining', __('Date of joining'));
        $show->field('work_status', __('Work status'));
        $show->field('designation', __('Designation'));
        $show->field('official_email', __('Official email'));
        $show->field('departmentable_type', __('Departmentable type'));
        $show->field('departmentable_id', __('Departmentable id'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Employee());

        $form->text('education', __('Education'));
        $form->date('date_of_joining', __('Date of joining'))->default(date('Y-m-d'));
        $form->switch('work_status', __('Work status'));
        $form->text('designation', __('Designation'));
        $form->text('official_email', __('Official email'));
        $form->text('departmentable_type', __('Departmentable type'));
        $form->number('departmentable_id', __('Departmentable id'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
