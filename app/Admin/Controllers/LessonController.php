<?php

namespace App\Admin\Controllers;

use App\Models\Lesson;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LessonController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Lesson';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Lesson());

        $grid->column('id', __('Id'));
        $grid->column('course_id', __('Course id'));
        $grid->column('course_module', __('Course module'));
        $grid->column('module_order', __('Module order'));
        $grid->column('lesson_icon', __('Lesson icon'));
        $grid->column('lesson_title', __('Lesson title'));
        $grid->column('lesson_description', __('Lesson description'));
        $grid->column('lesson_videoembed', __('Lesson videoembed'));
        $grid->column('lesson_content', __('Lesson content'));
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
        $show = new Show(Lesson::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('course_id', __('Course id'));
        $show->field('course_module', __('Course module'));
        $show->field('module_order', __('Module order'));
        $show->field('lesson_icon', __('Lesson icon'));
        $show->field('lesson_title', __('Lesson title'));
        $show->field('lesson_description', __('Lesson description'));
        $show->field('lesson_videoembed', __('Lesson videoembed'));
        $show->field('lesson_content', __('Lesson content'));
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
        $form = new Form(new Lesson());

        $form->number('course_id', __('Course id'));
        $form->switch('course_module', __('Course module'));
        $form->switch('module_order', __('Module order'))->default(1);
        $form->text('lesson_icon', __('Lesson icon'));
        $form->text('lesson_title', __('Lesson title'));
        $form->text('lesson_description', __('Lesson description'));
        $form->text('lesson_videoembed', __('Lesson videoembed'));
        $form->textarea('lesson_content', __('Lesson content'));

        return $form;
    }
}
