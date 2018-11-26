<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('v1.head.meta')
    @include('v1.head.head')

    <link rel="stylesheet" href="{{asset('v1/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('v1/plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css')}}">
    @yield('styles')
    @yield('headScripts')

    <title>@yield('page-title')</title>
</head>

<body class="raleway">

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

<div class="container">
    <div class="row justify-content-center text-center my-5">
        <div class="col-12">
            <h1>
                Дизайн
            </h1>
        </div>
        <div class="col-5 my-5 text-center">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, obcaecati.</span>
        </div>
    </div>
</div>

@yield('mocups')


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

            <div class="col-12 mt-5">
                <h1>ПЛАНИРУЕТЕ ЗАПУСТИТЬ ПОДОБНЫЙ ПРОЕКТ?</h1>
                <h4>Давайте обсудим возможное сотрудничество</h4>
                <button class="hvr-bounce-to-bottom btn mt-5">Предложить проект</button>
            </div>
        </div>
    </div>
</div>

{{--Подвал--}}
@include('v1.foot.footer')

<!-- Scripts -->
@include('v1.foot.scripts')
    <script src="{{asset('v1/plugins/OwlCarousel2/dist/owl.carousel.js')}}"></script>
@yield('footScripts')

</body>

</html>