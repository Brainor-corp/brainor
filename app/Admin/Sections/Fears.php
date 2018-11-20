<?php

namespace App\Admin\Sections;

use App\User;
use Bradmin\Section;
use Bradmin\SectionBuilder\Display\BaseDisplay\Display;
use Bradmin\SectionBuilder\Display\Table\Columns\BaseColumn\Column;
use Bradmin\SectionBuilder\Form\BaseForm\Form;
use Bradmin\SectionBuilder\Form\Panel\Columns\BaseColumn\FormColumn;
use Bradmin\SectionBuilder\Form\Panel\Fields\BaseField\FormField;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Fears extends Section
{
    protected $title = 'Развенчаем страхи';

    public static function onDisplay(){
        $display = Display::table([
            Column::text('fear_title', 'Страх'),
            Column::text('fear_answer', 'Ответ'),
            Column::text('published_at', 'Время публикации'),
        ])->setPagination(10);

        return $display;
    }

    public static function onCreate()
    {
        return self::onEdit();
    }

    public static function onEdit()
    {
        $form = Form::panel([
            FormColumn::column([
                FormField::Wysiwyg('fear_title', 'Страх')->setRequired(true),
                FormField::Wysiwyg('fear_answer', 'Ответ')->setRequired(true),
                FormField::datepicker('published_at', 'Время публикации')
                    ->setLanguage('ru')
                    ->setValue(Carbon::now())
                    ->setFormat('yyyy-mm-dd hh:ii:00')
                    ->setTodayBtn(true)
                    ->setClearBtn(true)
                    ->setRequired(true)
                    ->setMinuteStep(1),
            ]),
        ]);

        return $form;
    }

}