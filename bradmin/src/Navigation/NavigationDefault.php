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
                'url' => '/bradmin/fears',
                'icon' => 'fas fa-pastafarianism',
                'text' => 'Развенчаем страхи'
            ]
        ];

        return $navigation;
    }
}