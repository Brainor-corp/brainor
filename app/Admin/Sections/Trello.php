<?php

namespace App\Admin\Sections;

use Bradmin\Section;
use Bradmin\SectionBuilder\Display\BaseDisplay\Display;
use Bradmin\SectionBuilder\Meta\Meta;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class Trello extends Section
{
    protected $title = 'Генератор отчетов v2.0';


    public static function onDisplay(Request $request){

        $display = Display::custom([])
            ->setView(View::make('v1/pages/admin-pages/trello-report-generator'));

        return $display;
    }

    public function isDeletable()
    {
        return true;
    }
}