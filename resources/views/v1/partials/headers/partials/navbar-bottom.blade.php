<div class="row align-items-center mb-3">
    <div class="col-lg-4 col-12 px-0 align-self-center">
        <ul class="navbar-nav navbar py-lg-0 px-0">
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link black-link py-lg-0" href="/servises"><b>Услуги</b></a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/technologies">Технологии</a>
            </li>
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/portfolio">Портфолио</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link black-link py-xl-0" href="/about-company"><b>Компания</b></a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/contacts">Контакты</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-8 col-12 text-center" @if(isset($isMainPage)) id="price-btn" @endif>
        {{--<a href="@if(!isset($isMainPage))/@endif#price-form" class="btn float-lg-right w-270px hvr-bounce-to-bottom">Просчитать проект</a>--}}
        @if(!isset($isMainPage))
            <a class="btn float-lg-right w-270px hvr-bounce-to-bottom" href="#questModal" data-toggle="modal" data-target="#questModal">Просчитать проект</a>
        @else
            <a class="btn float-lg-right w-270px hvr-bounce-to-bottom" href="#price-form">Просчитать проект</a>
        @endif
    </div>
</div>