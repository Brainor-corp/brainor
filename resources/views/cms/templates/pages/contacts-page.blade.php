<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "контакты"
 */
?>

@extends('v1.layouts.inside-pages-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
@endsection


@section('headScripts')
    <title>{{$page->title}}</title>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@endsection

@section('page-title')
@endsection


@section('content')
    <div class="container">
        <div class="row my-5 pt-lg-0 pt-4">
            <div class="col-12">
                <div class="align-items-start">
                    <div class="text-justify">
                        <div class="text-justify">
                            <h1>{{$page->title}}</h1>
                            <p>
                                {!! html_entity_decode($page->content) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
@endsection