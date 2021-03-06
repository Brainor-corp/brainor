<?php

namespace App\Admin\Sections;

use Bradmin\Section;
use Bradmin\SectionBuilder\Display\BaseDisplay\Display;
use Bradmin\SectionBuilder\Meta\Meta;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class Generator extends Section
{
    protected $title = 'Генератор';


    public static function onDisplay(Request $request){

        $display = Display::custom([])
            ->setView(View::make('v1/pages/admin-pages/generator'));

        return $display;
    }

    public function isDeletable()
    {
        return true;
    }
}