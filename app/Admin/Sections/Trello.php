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
        $meta = new Meta;
        $meta
            ->setStyles([
                'trello-css' => asset('v1/css/pages/bradmin/reportGenerator.css')
            ])
            ->setScripts([
                'head' => [],
                'body' => [
                    'trello-js' => asset('v1/js/bradmin/reportGenerator.js')
                ]
            ]);

        $display = Display::custom([])
            ->setView(View::make('v1/pages/admin-pages/trello-report-generator'))
            ->setMeta($meta);

        return $display;
    }

    public function isDeletable()
    {
        return true;
    }
}