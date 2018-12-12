<ul class="navbar-nav navbar px-0">
    <li class="nav-item col-lg-4 col-12 my-3 my-lg-0 align-self-center text-lg-left text-center">
        <span class="text-nowrap col-6"><i class="fas fa-phone mr-1 fa-flip-horizontal"></i><a class="black-link" href="tel:+79054339913">+7(905)-433-99-13</a></span>
        <span class="text-nowrap col-6"><i class="fas fa-envelope mr-1"></i><a class="black-link" href="mailto:tasks@brainor.ru">tasks@brainor.ru</a></span>
    </li>
    {{--<li class="nav-item col-lg-4 col-12 my-3 my-lg-0 align-self-center text-center">--}}
        {{--<span><a href="http://instagram.com" class="black-link"><i class="fab fa-2x fa-instagram mr-2"></i></a></span>--}}
        {{--<span><a href="http://vk.com" class="black-link"><i class="fab fa-2x fa-vk mr-2"></i></a></span>--}}
        {{--<span><a href="http://facebook.com" class="black-link"><i class="fab fa-2x fa-facebook-f mr-2"></i></a></span>--}}
        {{--<span><a href="http://youtube.ru" class="black-link"><i class="fab fa-2x fa-youtube"></i></a></span>--}}
    {{--</li>--}}
    <li class="nav-item col-lg-4 col-12 my-3 my-lg-0 p-0 align-self-center">
        <form action="/search">
            <div class="searchboxwrapper text-center">
                <input class="searchbox float-lg-right w-270px" type="text" value="{{ app('request')->input('term') }}" name="term" placeholder="Поиск по сайту..." id="term">
                <button type="submit" class="text-black-50 searchsubmit"><i class="fas fa-1x fa-search"></i></button>
            </div>
        </form>
    </li>
</ul>

