<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "улей"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-uley.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/uley/partials-bg/count1.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/uley/partials-bg/count2.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
@endsection


@section('project-name')
    Lorem ipsum dolor sit.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-uley.png')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
@endsection

@section('design')
    Дизайн
@endsection

@section('design-description')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, obcaecati.
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
            220+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>

    <div class="col-12 col-md-4">
        <h1 class="details-number">
            220+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>
@endsection

@section('project-functionality')
    <div class="col-12 col-md-4 text-left">
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-left">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem</div>
        </div>
    </div>
@endsection

@section('site-link')
    <div class="my-5">
        <i class="fas fa-link"></i> <a href="http://uleykf.ru" class="text-uppercase black-link" target="_blank">Улей</a>
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/uley/full-height-main.png')])
                    </div>
                    <div class="ipad">
                        @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/uley/full-main-ipad.png')])
                    </div>
                    <div class="iphone">
                        @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/uley/full-main-iphone.png')])
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
                        <img src="{{asset('img/portfolios/uley/full-mac.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/uley/full-ipad.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/uley/full-iphone.png')}}" alt="">
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