<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('v1.head.meta')
    @include('v1.head.head')

    @yield('styles')
    @yield('headScripts')

    <title>@yield('page-title')</title>
</head>

<body class="raleway">
<div id="toTop"><i class="fa fa-angle-up text-white fa-2x"></i></div>

{{--Шапка--}}
@include('v1.partials.headers.main-page-header')

{{--Контент страницы--}}
@yield('content')

{{--Подвал--}}
@include('v1.foot.footer')

<!-- Scripts -->
@include('v1.foot.scripts')
@yield('footScripts')

</body>

</html>
