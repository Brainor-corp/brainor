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
@endsection

@section('page-title')
@endsection


@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="align-items-start">
                    <div class="text-justify">
                        <div class="text-justify">
                            <h1>{{$page->title}}</h1>
                            <p>
                                {!! html_entity_decode($page->content) !!}
                            </p>
                            <div class="my-5">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A52e1c98fe6a29e60cd7de5ac23f3d86a4cc80194dd61f37f697a33a03047750e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
@endsection