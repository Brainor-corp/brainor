<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('v1.head.meta')
    @include('v1.head.head')

    <link rel="stylesheet" href="{{asset('v1/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('v1/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('v1/css/partials/start-now-banner.css')}}">
    @yield('styles')
    @yield('headScripts')

    <title>@yield('page-title')</title>
</head>

<body class="raleway">
<div id="toTop"></div>

{{--Шапка--}}
@include('v1.partials.headers.inside-pages-header')

{{--Контент страницы--}}

<div class="container">
    <div class="row justify-content-center text-center mt-5">
        <div class="col-12 col-md-8">
            <h2 class="my-5">
                @yield('project-name')
            </h2>
            <div class="triangle-border">
                <div class="left-right-border justify-content-center p-5">
                    @yield('project-logo')
                    <h1 class="my-5">
                        Задача:
                    </h1>
                    <div class="project-task row justify-content-center text-center">
                        <span class="col-12 col-md-7">@yield('project-task')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-auto d-xl-block d-none">
        @yield('anim-images-bg')
    </div>
</div>

<div class="container">
    <div class="row justify-content-center text-center mt-5">
        <div class="col-12">
            <h1>
                @yield('design')
            </h1>
        </div>
        <div class="col-5 mt-5 text-center">
            <span>@yield('design-description')</span>
        </div>
    </div>
</div>

<div class="mt-5">
    @yield('mocups')
</div>


<div class="container-fluid technical-details mt-5">
    <div class="container">
        <div class="row align-items-center text-center my-5">

            <div class="col-12">
                <h1>
                    Технические нюансы проекта
                </h1>
            </div>

            @yield('project-details')

        </div>
    </div>
</div>

<div class="container-fluid project-functionality pt-5">
    <div class="container text-center">
        <h1 class="text-uppercase">
            Функционал проекта
        </h1>
        <div class="row justify-content-between my-5">
            @yield('project-functionality')
        </div>
        <div>
            <i class="fas fa-cogs mr-3 mb-5"></i>И еще более 40 полезных функций...
        </div>
    </div>
</div>



<div class="container-fluid planing-block">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-5 link-block">
                <div class="my-5">
                    <h5>
                        Ссылка на сайт
                    </h5>
                </div>
                @yield('site-link')
            </div>
            <div class="col-12 mt-5"  @if(isset($isMainPage)) id="price-btn" @endif>
                <h1>ПЛАНИРУЕТЕ ЗАПУСТИТЬ ПОДОБНЫЙ ПРОЕКТ?</h1>
                <h4>Давайте обсудим возможное сотрудничество</h4>
                <a href="@if(!isset($isMainPage))/@endif#price-form" class="hvr-bounce-to-bottom btn mt-5 bg-transparent">Предложить проект</a>
            </div>
        </div>
    </div>
</div>

@include('v1.partials.banners.start-now-banner')


{{--Подвал--}}
@include('v1.foot.footer')

<!-- Scripts -->
@include('v1.foot.scripts')
    <script src="{{asset('v1/plugins/OwlCarousel2/dist/owl.carousel.js')}}"></script>
@yield('footScripts')

</body>

</html>
