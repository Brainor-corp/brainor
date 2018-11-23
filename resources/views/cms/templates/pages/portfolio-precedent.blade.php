<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "прецедент"
 */
?>

@extends('v1.layouts.portfolio-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/general.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocups.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-precedent.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/portfolio-media.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/portfolio-pages/mocup-media.css") }}" rel="stylesheet">
@endsection


@section('project-name')
    Lorem ipsum dolor sit.
@endsection
@section('project-logo')
    <img src="{{asset('img/works/logo-precedent.png')}}" alt="" class="project-logo">
@endsection
@section('project-task')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
@endsection



@section('project-details')
    <div class="col-12 col-md-4 mt-5">
        <img src="{{asset('img/works/logo-precedent.png')}}" alt="" class="details-picture my-3">
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
        <i class="fas fa-link"></i> <a href="http://precedent34.ru" class="text-uppercase">precedent</a>
    </div>
@endsection

@section('mocups')
    <div class="mocups-container text-center">
        <div class="mocups-row">
            <div class="mac">
                @include('v1.partials.mocups.mac', ['path' => asset('img/portfolios/precedent/full-height-main.png')])
            </div>
            <div class="ipad">
                @include('v1.partials.mocups.ipad', ['path' => asset('img/portfolios/precedent/full-main-ipad.png')])
            </div>
            <div class="iphone">
                @include('v1.partials.mocups.iphone', ['path' => asset('img/portfolios/precedent/full-main-iphone.png')])
            </div>
        </div>
    </div>
@endsection