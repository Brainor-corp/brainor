<div class="container-fluid px-5 inside-pages-header">
    <nav class="navbar navbar-expand-xl navbar-light pb-0">
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
    <nav class="navbar navbar-expand-xl navbar-light py-xl-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-12">
                @include('v1.partials.headers.partials.navbar-bottom')
            </div>
        </div>
    </nav>

</div>