<?php

namespace App\Admin\Controllers;

use App\Models\Card;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CardController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Card';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Card());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('number', __('Number'));
        $grid->column('expiry_date', __('Expiry date'));
        $grid->column('pin', __('Pin'));
        $grid->column('cvv_code', __('Cvv code'));
        $grid->column('status', __('Status'));
        $grid->column('customer_id', __('Customer id'));
        $grid->column('user_info_id', __('User info id'));
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
        $show = new Show(Card::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('number', __('Number'));
        $show->field('expiry_date', __('Expiry date'));
        $show->field('pin', __('Pin'));
        $show->field('cvv_code', __('Cvv code'));
        $show->field('status', __('Status'));
        $show->field('customer_id', __('Customer id'));
        $show->field('user_info_id', __('User info id'));
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
        $form = new Form(new Card());

        $form->text('title', __('Title'));
        $form->number('number', __('Number'));
        $form->date('expiry_date', __('Expiry date'))->default(date('Y-m-d'));
        $form->number('pin', __('Pin'));
        $form->number('cvv_code', __('Cvv code'));
        $form->switch('status', __('Status'));
        $form->number('customer_id', __('Customer id'));
        $form->number('user_info_id', __('User info id'));

        return $form;
    }
}
