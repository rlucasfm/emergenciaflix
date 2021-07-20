<?php

namespace App\Admin\Controllers;

use App\Models\Course;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('qnt_lessons', __('Qnt lessons'));
        $grid->column('qnt_hours', __('Qnt hours'));
        $grid->column('link', __('Link'));
        $grid->column('img', __('Img'));
        $grid->column('sell_link', __('Sell link'));
        $grid->column('modules', __('Modules'));
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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('qnt_lessons', __('Qnt lessons'));
        $show->field('qnt_hours', __('Qnt hours'));
        $show->field('link', __('Link'));
        $show->field('img', __('Img'));
        $show->field('sell_link', __('Sell link'));
        $show->field('modules', __('Modules'));
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
        $form = new Form(new Course());

        $form->text('name', __('Name'));
        $form->text('description', __('Description'));
        $form->number('qnt_lessons', __('Qnt lessons'));
        $form->number('qnt_hours', __('Qnt hours'));
        $form->text('link', __('Link'));
        $form->text('img', __('Img'));
        $form->text('sell_link', __('Sell link'));
        $form->switch('modules', __('Modules'))->default(1);

        return $form;
    }
}
