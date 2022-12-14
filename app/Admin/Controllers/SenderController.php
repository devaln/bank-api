<?php

namespace App\Admin\Controllers;

use App\Models\Sender;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SenderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sender';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sender());

        $grid->column('id', __('Id'));
        $grid->column('user_info_id', __('User info id'));
        $grid->column('transation_id', __('Transation id'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('card_id', __('Card id'));
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
        $show = new Show(Sender::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_info_id', __('User info id'));
        $show->field('transation_id', __('Transation id'));
        $show->field('customer_id', __('Customer id'));
        $show->field('card_id', __('Card id'));
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
        $form = new Form(new Sender());

        $form->number('user_info_id', __('User info id'));
        $form->number('transation_id', __('Transation id'));
        $form->number('customer_id', __('Customer id'));
        $form->number('card_id', __('Card id'));

        return $form;
    }
}
