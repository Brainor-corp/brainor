<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "Своя роза"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-myrose.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/myrose/partials-bg/roses1.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/myrose/partials-bg/roses2.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
    {{--<img src="{{asset('img/portfolios/myrose/partials-bg/molot_bottom.png')}}" alt="" class="img-fluid last-bg-item floating-portfolio-bg">--}}
@endsection


@section('project-name')
    СВОЯ РОЗА – интернет-магазин сети магазинов по продаже цветов.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-rose.svg')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Комплексная разработка интернет-магазина по продаже цветов с доставкой.
@endsection

@section('design')
    Дизайн
@endsection

@section('design-description')
    Перед нами была поставлена задача разработать удобный сайт с пожеланиями заказчика и потребностями целевой аудитории.
@endsection

@section('project-details')
    <div class="col-12 col-md-4 holder my-md-0 my-4">
        <div class="block">
            <h2>Laravel</h2>
            веб-фреймворк с открытым кодом, предназначенный для разработки с использованием архитектурной модели MVC.
        </div>
        <img src="{{asset('img/works/laravel.png')}}" alt="" class="details-picture w-50">
    </div>

    <div class="col-12 col-md-4 my-md-0 my-4">
        <h1 class="details-number">
            250+
        </h1>
        <span><b>часов разработки</b></span>
    </div>

    <div class="col-12 col-md-4 my-md-0 my-4">
        <h1 class="details-number">
            15+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>
@endsection

@section('project-functionality')
    <div class="row text-left">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Разработка технического задания</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Разработка вариантов дизайна</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Разработка 10+ прототипов</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Адаптивная верстка в сетке Bootstrap v4</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Мобильная адаптация сайта</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Каталог товаров</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Конструктор товара</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Корзина</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Онлайн заказ</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Онлайн оплата</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Личный кабинет</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Поиск по сайту</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Система управления контентом</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Поисковая оптимизация сайта</div>
            </div>
        </div>
    </div>
@endsection

@section('site-link')
    <div class="my-5">
        <i class="fas fa-link"></i> <a href="http://myrose.ru" class="black-link text-uppercase" target="_blank">своя роза</a>
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/myrose/full-height-main.jpg')])
                    </div>
                    <div class="ipad">
                        @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/myrose/full-main-ipad.jpg')])
                    </div>
                    <div class="iphone">
                        @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/myrose/full-main-iphone.jpg')])
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
                        <a href="#" data-toggle="modal" data-target="#mac">
                            <img src="{{asset('img/portfolios/myrose/full-mac.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item text-center">
                        <a href="#" data-toggle="modal" data-target="#ipad">
                            <img src="{{asset('img/portfolios/myrose/full-ipad.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item text-center">
                        <a href="#" data-toggle="modal" data-target="#iphone">
                            <img src="{{asset('img/portfolios/myrose/full-iphone.png')}}" alt="">
                        </a>
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


    {{--MODALS--}}
    <div class="modal fade modal-portfolio-margin" id="mac" tabindex="-1" role="dialog" aria-labelledby="mac" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="{{asset('img/portfolios/myrose/full-height-main.jpg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn hvr-bounce-to-top bg-transparent" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-portfolio-margin" id="ipad" tabindex="-1" role="dialog" aria-labelledby="mac" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="{{asset('img/portfolios/myrose/full-main-ipad.jpg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn hvr-bounce-to-top bg-transparent" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-portfolio-margin" id="iphone" tabindex="-1" role="dialog" aria-labelledby="mac" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="{{asset('img/portfolios/myrose/full-main-iphone.jpg')}}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn hvr-bounce-to-top bg-transparent" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
    <script src="{{asset('v1/js/portfolio-pages/precedent.js')}}"></script>
@endsection