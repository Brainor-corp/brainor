<?php
/**
 * class: BRPageTemplate
 * title: Шаблон внутренней страницы
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
@endsection