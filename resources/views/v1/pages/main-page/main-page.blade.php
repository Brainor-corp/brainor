@extends('v1.layouts.main-page-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/main-page/styles/main-page.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/main-page/media/main-page-media.css") }}" rel="stylesheet">
@endsection

@section('headScripts')
@endsection

@section("content")
    @include("v1.pages.main-page.fragments.top-form")
    @include("v1.pages.main-page.fragments.about-pricing")
    @include("v1.pages.main-page.fragments.our-clients")
    @include("v1.pages.main-page.fragments.technologies")
    @include("v1.pages.main-page.fragments.price-calculation")
    @include("v1.pages.main-page.fragments.descending-fears")
    @include("v1.pages.main-page.fragments.start-now-banner")
@endsection

@section('footScripts')
    <script src="{{ asset("v1/js/main-page.js") }}@include("v1.partials.versions.js")"></script>
@endsection