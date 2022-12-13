<?php

namespace App\Admin\Controllers;

use App\Models\Nominee;
use App\Models\User_information;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NomineeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Nominee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Nominee());

        $grid->column('id', __('Id'));
        $grid->column('first_name', __('First name'));
        $grid->column('middle_name', __('Middle name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('date_of_birth', __('Date of birth'));
        $grid->column('contact', __('Contact'));
        $grid->column('gender', __('Gender'));
        $grid->column('relation', __('Relation'));
        $grid->column('user_info_id', __('User Information Id'));
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
        $show = new Show(Nominee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
        $show->field('last_name', __('Last name'));
        $show->field('date_of_birth', __('Date of birth'));
        $show->field('contact', __('Contact'));
        $show->field('gender', __('Gender'));
        $show->field('relation', __('Relation'));
        $show->field('user_info_id', __('User Information Id'));
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
        $form = new Form(new Nominee());
        $form->select('user_info_id')->options(User_information::all()->pluck('id'));
        $form->text('first_name', __('First name'));
        $form->text('middle_name', __('Middle name'));
        $form->text('last_name', __('Last name'));
        $form->date('date_of_birth', __('Date of birth'))->default(date('Y-m-d'));
        $form->number('contact', __('Contact'));
        $form->text('gender', __('Gender'));
        $form->text('relation', __('Relation'));

        return $form;
    }
}
