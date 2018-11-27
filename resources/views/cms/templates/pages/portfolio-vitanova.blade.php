<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "ВитаНова"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-vitanova.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('anim-images-bg')
    <img src="{{asset('img/portfolios/vitanova/partials-bg/mikro.png')}}" alt="" class="img-fluid first-bg-item floating-portfolio-bg">
    <img src="{{asset('img/portfolios/vitanova/partials-bg/steto.png')}}" alt="" class="img-fluid second-bg-item floating-portfolio-bg">
@endsection


@section('project-name')
    Lorem ipsum dolor sit.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-vita-nova.png')}}" alt="" class="project-logo">
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
    <div class="col-12 col-md-4 mt-5">
        <img src="{{asset('img/works/wordpress.png')}}" alt="" class="details-picture my-3">
    </div>

    <div class="col-12 col-md-4 mt-5">
        <h1 class="details-number">
            220+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>

    <div class="col-12 col-md-4 mt-5">
        <h1 class="details-number">
            220+
        </h1>
        <span><b>страниц дизайна</b></span>
    </div>
@endsection

@section('project-functionality')
    <div class="col-12 col-md-4 text-center">
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-center">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
    </div>
    <div class="col-12 col-md-4 text-center">

        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="my-4 row">
            <div class="col-auto"><i class="fa-check fa fa-2x"></i></div>
            <div class="col">Lorem ipsum dolor sit amet.</div>
        </div>
    </div>
@endsection

@section('site-link')
    <div class="my-5">
        <i class="fas fa-link"></i> <a href="http://vitanova34.ru" class="text-uppercase black-link">ВитаНова</a>
    </div>
@endsection

@section('mocups')

    <div class="container-fluid d-md-block d-none mocups-container">
        <div class="row">
            <div class="col-12">
                <div class="mocups-row">
                    <div class="mac">
                        @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/vitanova/full-height-main.png')])
                    </div>
                    <div class="ipad">
                        @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/vitanova/full-main-ipad.png')])
                    </div>
                    <div class="iphone">
                        @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/vitanova/full-main-iphone.png')])
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
                        <img src="{{asset('img/portfolios/vitanova/full-mac.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/vitanova/full-ipad.png')}}" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{asset('img/portfolios/vitanova/full-iphone.png')}}" alt="">
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