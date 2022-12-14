<?php

namespace App\Admin\Controllers;

use App\Models\Address;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AddressController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Address';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Address());

        $grid->column('id', __('Id'));
        $grid->column('city_name', __('City name'));
        $grid->column('landmark', __('Landmark'));
        $grid->column('taluka', __('Taluka'));
        $grid->column('district', __('District'));
        $grid->column('state', __('State'));
        $grid->column('country', __('Country'));
        $grid->column('pin_code', __('Pin code'));
        $grid->column('addressable_type', __('Addressable type'));
        $grid->column('addressable_id', __('Addressable id'));
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
        $show = new Show(Address::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('city_name', __('City name'));
        $show->field('landmark', __('Landmark'));
        $show->field('taluka', __('Taluka'));
        $show->field('district', __('District'));
        $show->field('state', __('State'));
        $show->field('country', __('Country'));
        $show->field('pin_code', __('Pin code'));
        $show->field('addressable_type', __('Addressable type'));
        $show->field('addressable_id', __('Addressable id'));
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
        $form = new Form(new Address());

        $form->text('city_name', __('City name'));
        $form->text('landmark', __('Landmark'));
        $form->text('taluka', __('Taluka'));
        $form->text('district', __('District'));
        $form->text('state', __('State'));
        $form->text('country', __('Country'));
        $form->number('pin_code', __('Pin code'));
        $form->text('addressable_type', __('Addressable type'));
        $form->number('addressable_id', __('Addressable id'));

        return $form;
    }
}
