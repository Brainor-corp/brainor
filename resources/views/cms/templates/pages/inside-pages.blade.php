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
@endsection

@section('page-title')
    {{$page->title}}
@endsection
@section('content')
    <div class="container mt-5 pt-lg-0 pt-4">
        <div class="mb-5 fs-breadcrumbs decoration-links">
            @php
                foreach ($page->ancestors as $ancestor)
                {
                    $ancestors[] = $ancestor;
                }
                $ancestors[] = $page;
            @endphp
            <a href="/"><i class="fas fa-home green-link"></i></a>
            @foreach($ancestors as $ancestor)
                /<a class="black-link" href="{{ url($ancestor->url) }}">{{ $ancestor->title }}</a>
            @endforeach
        </div>
        <div class="my-5">
            <div class="align-items-start">
                <div class="text-justify my-5">
                    <h1>{!! $page->title !!}</h1>
                    <h3>{!! $page->description !!}</h3>
                </div>
                <div class="text-justify">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
@endsection