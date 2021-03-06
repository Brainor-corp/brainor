@extends('v1.layouts.main-page-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/main-page/styles/main-page.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/main-page/media/main-page-media.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('v1/css/partials/start-now-banner.css')}}">
@endsection

@section('headScripts')
@endsection

@section("content")
    @include("v1.pages.main-page.fragments.top-form")
    @include("v1.pages.main-page.fragments.about-pricing")
    @include("v1.pages.main-page.fragments.our-clients")
    <div class="container-fluid technology-section py-5 px-0">
        <div class="section-name my-5 text-center">
            <h1>Технологии</h1>
        </div>
        <div class="d-md-block d-none">
            @include("v1.pages.main-page.fragments.technologies")
        </div>
        <div class="d-md-none d-block">
            @include("v1.pages.main-page.fragments.technologies-mobile")
        </div>
    </div>


    @include("v1.pages.main-page.fragments.price-calculation")
    @include("v1.pages.main-page.fragments.descending-fears")
    @include("v1.partials.banners.start-now-banner")
@endsection

@section('footScripts')
    <script src="{{ asset("v1/plugins/typed.js-master/lib/typed.js") }}"></script>
    <script src="{{ asset("v1/js/main-page.js") }}@include("v1.partials.versions.js")"></script>
    <script src="{{ asset("v1/js/price-calculator.js") }}@include("v1.partials.versions.js")"></script>
    <script src="{{ asset("v1/js/send-mail.js") }}@include("v1.partials.versions.js")"></script>
@endsection