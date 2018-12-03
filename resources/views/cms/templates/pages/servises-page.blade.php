<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "услуги"
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
                            <div class="my-5"><h1>{{ $page->title }}</h1></div>
                            <div class="fs-text-post">
                                {!! html_entity_decode($page->content) !!}
                            </div>
                            <div>
                                <ul>
                                    <div class="row align-items-center">
                                        @foreach($page->children->sortByDesc('published_at') as $child)
                                            <div class="col-12 mx-auto my-1 decoration-links">
                                                <li><a href="{{ $child->url }}" class="fs-text-post my-2 black-link">{{ $child->title }}</a></li>
                                            </div>
                                        @endforeach
                                    </div>
                                </ul>
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