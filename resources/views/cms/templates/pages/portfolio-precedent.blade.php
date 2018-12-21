<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "прецедент"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('meta')
    <title>Портфолио | Прецедент</title>
    <meta name="description" content="Портфолио | Прецедент– корпоративный сайт юридической компании." />
@endsection

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-precedent.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/precedent/partials-bg/vesy.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/precedent/partials-bg/molot_top.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/precedent/partials-bg/molot_bottom.png')}}" alt="" class="img-fluid last-bg-item floating-portfolio-bg">
@endsection


@section('project-name')
    Прецедент– корпоративный сайт юридической компании.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-precedent.png')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Комплексная разработка корпоративного сайта компании.
@endsection

@section('design')
    Дизайн
@endsection

@section('design-description')
    Перед нами была поставлена задача разработать удобный сайт с пожеланиями заказчика и потребностеями целевой аудитории.
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
            150+
        </h1>
        <span><b>часов разработки</b></span>
    </div>

    <div class="col-12 col-md-4 my-md-0 my-4">
        <h1 class="details-number">
            5+
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
                <div class="col">Каталог услуг</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Раздел статей</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Контактные формы</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Онлайн консультации</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">Онлайн прайс-лист</div>
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
                <div class="col">Отзывы</div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="my-2 row">
                <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
                <div class="col">E-mail рассылка</div>
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
        <i class="fas fa-link"></i> <a href="http://precedent34.ru" class="text-uppercase black-link" target="_blank">precedent</a>
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/precedent/full-height-main.jpg')])
                    </div>
                    <div class="ipad">
                        @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/precedent/full-main-ipad.jpg')])
                    </div>
                    <div class="iphone">
                        @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/precedent/full-main-iphone.jpg')])
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
                            <img src="{{asset('img/portfolios/precedent/full-mac.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item text-center">
                        <a href="#" data-toggle="modal" data-target="#ipad">
                            <img src="{{asset('img/portfolios/precedent/full-ipad.png')}}" alt="">
                        </a>
                    </div>
                    <div class="item text-center">
                        <a href="#" data-toggle="modal" data-target="#iphone">
                            <img src="{{asset('img/portfolios/precedent/full-iphone.png')}}" alt="">
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
                <div class="modal-body scroll-modal-mobile">
                    <img class="img-fluid" src="{{asset('img/portfolios/precedent/full-height-main.jpg')}}" alt="">
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
                <div class="modal-body scroll-modal-mobile">
                    <img class="img-fluid" src="{{asset('img/portfolios/precedent/full-main-ipad.jpg')}}" alt="">
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
                <div class="modal-body scroll-modal-mobile">
                    <img class="img-fluid" src="{{asset('img/portfolios/precedent/full-main-iphone.jpg')}}" alt="">
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