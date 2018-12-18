<?php

namespace Bradmin\Navigation;


class NavigationDefault
{
    public static function getNavigationList()
    {
        $navigation = [
            [
                'url' => '/bradmin/Users',
                'icon' => 'fas fa-users',
                'text' => 'Пользователи'
            ],
            [
                'url' => '/bradmin/ReportGenerator',
                'icon' => 'far fa-trash-alt',
                'text' => 'Генератор отчетов'
            ],
            [
                'url' => '/bradmin/Trello',
                'icon' => 'fab fa-trello',
                'text' => 'Генератор отчетов 2.0'
            ],
            [
                'url' => '/bradmin/Generator',
                'icon' => 'fas fa-address-book',
                'text' => 'Генератор'
            ],
        ];

        return $navigation;
    }
}