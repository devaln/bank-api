<?php

namespace App\Admin\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\User_information;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserinformationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User_information';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User_information());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('first_name', __('First name'));
        $grid->column('middle_name', __('Middle name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('contact', __('Contact'));
        $grid->column('date_of_birth', __('Date of birth'));
        $grid->column('gender', __('Gender'));
        $grid->column('maritial_status', __('Maritial status'));
        $grid->column('adhaar_card_number', __('Adhaar card number'));
        $grid->column('pan_card_number', __('Pan card number'));
        $grid->column('login_id', __('Login Id'));
        $grid->column('login_type', __('Login type'));
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
        $show = new Show(User_information::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('first_name', __('First name'));
        $show->field('middle_name', __('Middle name'));
        $show->field('last_name', __('Last name'));
        $show->field('contact', __('Contact'));
        $show->field('date_of_birth', __('Date of birth'));
        $show->field('gender', __('Gender'));
        $show->field('maritial_status', __('Maritial status'));
        $show->field('adhaar_card_number', __('Adhaar card number'));
        $show->field('pan_card_number', __('Pan card number'));
        $show->field('login_id', __('Login id'));
        $show->field('login_type', __('Login type'));
        $show->field('image', __('Image'));
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
        $form = new Form(new User_information());

        // $form->number('user_id', __('User id'));
        $form->select('user_id')->options(User::all()->pluck('id'));
        $form->text('first_name', __('First name'));
        $form->text('middle_name', __('Middle name'));
        $form->text('last_name', __('Last name'));
        $form->text('contact', __('Contact'));
        $form->date('date_of_birth', __('Date of birth'))->default(date('Y-m-d'));
        $form->text('gender', __('Gender'));
        $form->text('maritial_status', __('Maritial status'));
        $form->number('adhaar_card_number', __('Adhaar card number'));
        $form->number('pan_card_number', __('Pan card number'));
        $form->select('login_id')->options(Employee::all()->pluck('id'));
        $form->text('login_type', __('Login type'));
        $form->image('image')->move('public/uploads/images/');

        return $form;
    }
}
