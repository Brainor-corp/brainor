<div class="container-fluid our-clients-section py-5  px-0">
    <div class="section-name text-center px-0">
        <h1>Наши последние работы</h1>
    </div>
</div>

<div class="container-fluid our-clients-section">
    <div class="row p-0">
        @foreach($works as $work)
            <a href="{{$work->url}}" class="our-clients-img col-12 p-0 col-xl-4 w-100" style="background-image: url({{'../../../../../img/works/' . $work->slug . '.png'}})">
                <div class="our-clients-img-blur"></div>
                <div class="p-3 h-100">
                    <div class="our-clients-img-inner">
                        <div class="row text-center h-100">
                            <div class="col-12 align-self-center"><img class="img-fluid work-logo" src="{{asset('img/works/logo-' . $work->slug . '.png')}}" alt=""></div>
                            @if(isset($work->description))<div class="col-12 align-self-center green-hover-link"><h4>{{$work->description}}</h4></div>@endif
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        <div class="our-clients-img col-12 p-0 col-xl-4 w-100" style="background-image: url({{'../../../../../img/works/us.png'}})">
            <div class="our-clients-img-blur p-3">
                <div class="our-clients-img-inner">
                    <div class="row text-center h-100">
                        <div class="col-12 align-self-center"><h1 class="text-uppercase">еще работы</h1></div>
                        <div class="col-12 align-self-center"><a href="#" class="hvr-bounce-to-bottom btn">Смотреть все работы</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>