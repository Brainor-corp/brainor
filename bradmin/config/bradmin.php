<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin url
    |--------------------------------------------------------------------------
    |
    | Root part of admin url.
    |
    */

    'admin_url' => 'bradmin',

    /*
    |--------------------------------------------------------------------------
    | Admin user path
    |--------------------------------------------------------------------------
    |
    | Path to user-side directory of admin published files.
    |
    */

    'user_path' => 'App\Admin',

    'base_models_path' => 'App\\',

    /*
    |--------------------------------------------------------------------------
    | CMS
    |--------------------------------------------------------------------------
    |
    */

    'cms_pages_templates_path' => 'cms.templates.pages',
    'cms_posts_templates_path' => 'cms.templates.posts',
    'cms_url_prefix' => 'cms',
    'cms_page_prefix' => 'page',
    'cms_post_prefix' => 'post',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Displayed in title and header.
    |
    */

    'title' => 'Bradmin',

    /*
    |--------------------------------------------------------------------------
    | Admin Logo
    |--------------------------------------------------------------------------
    |
    | Displayed in navigation panel.
    |
    */


    'logo'      => '/img/logo/white-logo.png',
//    'logo'      => '/bradmin/images/logo.jpg',

//    'logo_mini' => '',


    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    */

    'middleware' => ['web'],

];
