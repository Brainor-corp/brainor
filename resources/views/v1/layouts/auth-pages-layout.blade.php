<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('v1.head.meta')
    @include('v1.head.head')

    @yield('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">

    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">

    @yield('headScripts')

    <title>@yield('title')</title>
</head>

<body class="raleway">
<div id="toTop"></div>

{{--Шапка--}}
@include('v1.partials.headers.inside-pages-header')

{{--Контент страницы--}}
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                @yield('content')
            </div>
        </div>
    </div>
</div>

{{--Подвал--}}
@include('v1.foot.footer')

<!-- Scripts -->
@include('v1.foot.scripts')
@yield('footScripts')

</body>

</html>
