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

{{--Шапка--}}
@include('v1.partials.headers.inside-pages-header')

{{--Контент страницы--}}
@yield('content')

{{--Подвал--}}
@include('v1.foot.footer')

<!-- Scripts -->
@include('v1.foot.scripts')
@yield('footScripts')

</body>

</html>
