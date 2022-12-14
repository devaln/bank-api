<?php

namespace App\Admin\Controllers;

use App\Models\Manager;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ManagerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Manager';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Manager());

        $grid->column('id', __('Id'));
        $grid->column('designation', __('Designation'));
        $grid->column('user_info_id_type', __('User info id type'));
        $grid->column('user_info_id_id', __('User info id id'));
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
        $show = new Show(Manager::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('designation', __('Designation'));
        $show->field('user_info_id_type', __('User info id type'));
        $show->field('user_info_id_id', __('User info id id'));
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
        $form = new Form(new Manager());

        $form->text('designation', __('Designation'));
        $form->text('user_info_type', __('User info id type'));
        $form->number('user_info_id', __('User info id id'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
