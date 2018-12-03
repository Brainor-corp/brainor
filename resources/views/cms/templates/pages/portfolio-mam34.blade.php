<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "Мам34"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-vitanova.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-mam34.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/mam34/partials-bg/toy1.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/mam34/partials-bg/toy2.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
@endsection


@section('project-name')
    ИнстаМамы – сайт сообщества инстамам Волгограда и Волжского.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-mam34.png')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Разработка сайта сообщества и оптимизация под поисковое продвижение.
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
            <h2>WordPress</h2>
            Система управления содержимым сайта с открытым исходным кодом.
            Сфера применения — от блогов до достаточно сложных
            новостных ресурсов и интернет-магазинов. Встроенная система вместе с удачной архитектурой
            позволяет конструировать проекты широкой функциональной сложности.
        </div>
        <img src="{{asset('img/works/wordpress.png')}}" alt="" class="details-picture w-50">
    </div>

    <div class="col-12 col-md-4">
        <h1 class="details-number">
            100+
        </h1>
        <span><b>часов разработки</b></span>
    </div>

    <div class="col-12 col-md-4">
        <h1 class="details-number">
            10+
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
            <div class="col">Разработка 10+ прототипов </div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Адаптивная верстка в сетке Bootstrap v4</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Раздел для статей</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">E-mail рассылка</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Поиск по сайту</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Система управления контентом</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Мобильная адаптация сайта</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Контактные формы</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Запись на обучение</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Поисковая оптимизация сайта</div>
        </div>
    </div>
@endsection

@section('site-link')
    <div class="my-5">
        <i class="fas fa-link"></i> <a href="http://mam34.ru" class="text-uppercase black-link" target="_blank">Insta Мамы Волгограда</a>
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/mam34/full-height-main.png')])
                    </div>
                    <div class="ipad">
                        @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/mam34/full-main-ipad.png')])
                    </div>
                    <div class="iphone">
                        @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/mam34/full-main-iphone.png')])
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
                        <img src="{{asset('img/portfolios/mam34/full-mac.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/mam34/full-ipad.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/mam34/full-iphone.png')}}" alt="">
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