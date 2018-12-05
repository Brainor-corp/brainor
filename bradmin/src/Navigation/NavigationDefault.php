<?php

namespace Bradmin\Navigation;


class NavigationDefault
{
    public static function getNavigationList()
    {
        $navigation = [
            [
                'url' => '/bradmin/users',
                'icon' => 'fas fa-users',
                'text' => 'Пользователи'
            ],
            [
                'url' => '/bradmin/contacts',
                'icon' => 'fas fa-address-book',
                'text' => 'Контакты'
            ],
            [
                'url' => '/bradmin/ReportGenerator',
                'icon' => 'fas fa-address-book',
                'text' => 'Генератор отчетов'
            ],
            [
                'url' => '/bradmin/generator',
                'icon' => 'fas fa-address-book',
                'text' => 'Генератор'
            ],
            [
                'url' => '/bradmin/Trello',
                'icon' => 'fab fa-trello',
                'text' => 'Генератор отчетов 2.0'
            ]
        ];

        return $navigation;
    }
}