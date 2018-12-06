<div class="row align-items-center mb-3">
    <div class="col-lg-7 col-12">
        <ul class="navbar-nav navbar mb-2 py-lg-0 px-0">
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link black-link py-lg-0" href="/servises"><b>Услуги</b></a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/technologies"><b>Технологии</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/portfolio"><b>Портфолио</b></a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link black-link py-xl-0" href="/about-company"><b>Компания</b></a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link black-link py-lg-0" href="/contacts"><b>Контакты</b></a>
            </li>
        </ul>
    </div>
    <div class="col-lg-5 col-12 text-center" @if(isset($isMainPage)) id="price-btn" @endif>
        <a href="@if(!isset($isMainPage))/@endif#price-form" class="btn float-lg-right w-270px hvr-bounce-to-bottom">Просчитать проект</a>
    </div>
</div>