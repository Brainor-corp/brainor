<div class="container-fluid our-clients-section py-5  px-0">
    <div class="section-name text-center px-0">
        <h1>Наши последние работы</h1>
    </div>
</div>

<div class="container-fluid our-clients-section">
    <div class="row p-0 align-items-center">
        @foreach($works as $work)

            <div class="our-clients-img col-12 p-3 col-xl-4 w-100" style="background-image: url({{'../../../../../img/works/' . $work->slug . '.png'}})">
                <a href="{{$work->url}}">

                    <div class="our-clients-img-blur"></div>
                    <div class="our-clients-img-inner">
                        <div class="row text-center h-100">
                            <div class="col-12 align-self-center"><img class="img-fluid work-logo" src="{{asset('img/works/logo-' . $work->slug . '.png')}}" alt=""></div>
                            @if(isset($work->description))<div class="col-12 align-self-center green-hover-link work-description w-100"><h4 class="my-2">{{$work->description}}</h4></div>@endif
                        </div>
                    </div>
                </a>
                </div>

        @endforeach
        <div class="our-clients-img col-12 p-3 col-xl-4 w-100" style="background-image: url({{'../../../../../img/works/us.png'}})">
            <div class="our-clients-img-blur"></div>
            <div class="our-clients-img-inner">
                <div class="row text-center h-100">
                    <div class="col-12 align-self-center"><h1 class="text-uppercase">еще работы</h1></div>
                    <div class="col-12 align-self-center"><a href="/portfolio" class="hvr-bounce-to-bottom btn bg-transparent">Смотреть все работы</a></div>
                </div>
            </div>
        </div>
    </div>
</div>