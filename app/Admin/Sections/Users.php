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

class Users extends Section
{
    protected $title = 'Администраторы';

    public static function onDisplay(){
        $display = Display::table([
            Column::text('id', '#'),
            Column::text('name', 'Имя'),
            Column::text('email', 'EMail'),
        ])->setPagination(10);

        return $display;
    }

    public static function onCreate()
    {
        $form = Form::panel([
            FormColumn::column([
                FormField::input('name', 'ФИО')->setRequired(true),
                FormField::input('email', 'EMail')->setRequired(true)
                    ->setType('email'),
                FormField::input('password', 'Пароль')
                    ->setRequired(true)
                    ->setType('password'),
            ]),
        ]);

        return $form;
    }

    public static function onEdit()
    {
        $form = Form::panel([
            FormColumn::column([
                FormField::input('name', 'ФИО')->setRequired(true),
                FormField::input('email', 'EMail')->setRequired(true)
                    ->setType('email'),
            ]),
        ]);

        return $form;
    }

    public function beforeSave(Request $request, $model = null)
    {
        $duplicate = User::where([['email', $request->email],['id', '!=', $request->id]])->first();
        if($duplicate){
            throw  new \Exception("Пользователь с таким адресом электронной почты уже зарегестрирован!");
        }
    }

    public function afterSave(Request $request, $model = null)
    {
        $model->password = Hash::make($request->password);
        $model->save();
    }

//    public function isCreatable()
//    {
//        return false;
//    }
}