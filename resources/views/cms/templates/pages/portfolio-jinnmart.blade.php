<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "Джиннмарт"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-jinnmart.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/jinnmart/partials-bg/shop.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/jinnmart/partials-bg/cart.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
@endsection


@section('project-name')
    Джинмарт – антиаукцион онлайн.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-jinnmart.png')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Комплексная разработка интернет-магазина работающего по системе онлайн антиаукциона.
@endsection

@section('design')
    Дизайн
@endsection

@section('design-description')
    Перед нами была поставлена задача разработать удобный сайт с пожеланий заказчика и потребностей целевой аудитории.
@endsection

@section('project-details')
    <div class="col-12 col-md-4 holder">
        <div class="block">
            <h2>Laravel</h2>
            веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC. Выпущен под лицензией MIT.
        </div>
        <img src="{{asset('img/works/laravel.png')}}" alt="" class="details-picture w-50">
    </div>

    <div class="col-12 col-md-4">
        <h1 class="details-number">
            400+
        </h1>
        <span><b>часов разработки</b></span>
    </div>

    <div class="col-12 col-md-4">
        <h1 class="details-number">
            20+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>
@endsection

@section('project-functionality')
    <div class="col-12 col-md-4 text-left">
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Разработка технического задания</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Разработка вариантов дизайна</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Разработка 20+ прототипов </div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Адаптивная верстка в сетке Bootstrap v4</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Мобильная адаптация сайта</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Нагрузочный проект (500 000+ товаров)</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Каталог товаров</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Конструктор товара</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Корзина</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Система торгов</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Система управления контентом</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Онлайн заказ</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Личный кабинет</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Поиск по сайту</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">E-mail рассылка</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Система парсинга товаров.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Поисковая оптимизация сайта</div>
        </div>
    </div>
@endsection

@section('site-link')
    <div class="my-5">
        <i class="fas fa-link"></i> отсутствует
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/jinnmart/full-height-main.png')])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-md-none d-block">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme mocups-carousel">
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/jinnmart/full-mac.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="mocups-container text-center d-none d-lg-block">--}}
        {{--<div class="mocups-row">--}}
            {{--<div class="mac">--}}
                {{--@include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/precedent/full-height-main.png')])--}}
            {{--</div>--}}
            {{--<div class="ipad">--}}
                {{--@include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/precedent/full-main-ipad.png')])--}}
            {{--</div>--}}
            {{--<div class="iphone">--}}
                {{--@include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/precedent/full-main-iphone.png')])--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('footScripts')
    <script src="{{asset('v1/js/portfolio-pages/precedent.js')}}"></script>
@endsection