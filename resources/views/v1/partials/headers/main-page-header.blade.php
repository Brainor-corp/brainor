<div class="container-fluid px-5 main-page-header">
    @if(isset($isMainPage))
        <img data-src="{{asset('img/bg/flower.png')}}" alt="" class="bg-pics bg-pic-flower lazy">
        <img data-src="{{asset('img/bg/keyboard.png')}}" alt="" class="bg-pics bg-pic-keyboard lazy">
{{--        <img src="{{asset('img/bg/notebook.png')}}" alt="" class="bg-pics bg-pic-notebook">--}}
{{--        <img src="{{asset('img/bg/pen.png')}}" alt="" class="bg-pics bg-pic-pen">--}}
        <img src="{{asset('img/bg/mouse.png')}}" alt="" class="bg-pics bg-pic-mouse lazy">
        <div class="w-100 h-100 blur-block">
            <img data-src="{{asset('img/bg/flower.png')}}" alt="" class="bg-pics bg-pic-flower lazy">
            <img data-src="{{asset('img/bg/keyboard.png')}}" alt="" class="bg-pics bg-pic-keyboard lazy">
    {{--        <img src="{{asset('img/bg/notebook.png')}}" alt="" class="bg-pics bg-pic-notebook">--}}
    {{--        <img src="{{asset('img/bg/pen.png')}}" alt="" class="bg-pics bg-pic-pen">--}}
            <img data-src="{{asset('img/bg/mouse.png')}}" alt="" class="bg-pics bg-pic-mouse lazy">
        </div>
    @endif
    <div class="blur-color-block @if(!isset($isMainPage)) inside-page-header @endif"></div>

    {{--nav-desktop--}}
    <div class="d-lg-block d-none">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <a class="navbar-brand" href="/"><img src="{{asset('img/logo/animate-logo.svg')}}" alt="" class="logo-svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-12">
                    @include('v1.partials.headers.partials.navbar-top')
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-12">
                    @include('v1.partials.headers.partials.navbar-bottom')
                </div>

            </div>
        </nav>
    </div>


{{--nav-mobile--}}
    <div class="d-lg-none d-block fixed-nav">
        <nav class="navbar navbar-expand-lg navbar-light pb-0 bg-grey">
            <button class="navbar-toggler nav-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContentMobile" aria-controls="navbarSupportedContentMobile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="/"><img src="{{asset('img/logo/animate-logo.svg')}}" alt="" class="logo-svg-mobile"></a>
            <div class="collapse navbar-collapse w-100 bg-grey mobile-nav" id="navbarSupportedContentMobile">
                <div class="col-12 w-100 text-center my-3 height-nav-mobile">

                    @include('v1.partials.headers.partials.navbar-top')
                    @include('v1.partials.headers.partials.navbar-bottom')
                </div>
            </div>
        </nav>
    </div>
</div>