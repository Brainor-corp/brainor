<footer class="p-3 container-fluid">
    <div class="d-flex flex-wrap justify-content-around">
        <div class="d-flex flex-column mt-5 mx-4 mt-md-0 mx-lg-0 text-md-left text-center">
            <b>Услуги</b>
            <br>
            <ul class="navbar-nav">
               <li>
                   @php

                       $args = [
                           'type' => 'page',
                           'tags' => ['servises']
                       ];
                       $servises = \Bradmin\Cms\Helpers\CMSHelper::getQueryBuilder($args)
                   ->get();
                   @endphp
                   @foreach($servises as $servise)

                           <a class="black-link" href="{{$servise->url}}">
                               <p class="mb-0">{{ $servise->title }}</p>
                           </a>

                    @endforeach
               </li>
            </ul>
        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-md-0 mx-lg-0 text-md-left text-center">
            <b>О компании</b>
            <br>
            <ul class="navbar-nav">
                <li>Сайты компании</li>
                <li>Сайты компании</li>
                <li>Сайты компании</li>
                <li>Сайты компании</li>
                <li>Сайты компании</li>
                <li>Сайты компании</li>
            </ul>
        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-md-0 mx-lg-0 text-md-left text-center">
            <b>Контакты</b>
            <br>
            <ul class="navbar-nav w-100">
                <li class="nav-item my-2">
                    <span class="text-nowrap"><i class="fas fa-phone mr-1 fa-flip-horizontal"></i><a class="black-link" href="tel:+79054339913">+7(905)-433-99-13</a></span>
                </li>
                <li class="nav-item my-2">
                    <span class="text-nowrap"><i class="fas fa-envelope mr-2"></i><a class="black-link" href="mailto:tasks@brainor.ru">tasks@brainor.ru</a></span>
                </li>
                <li class="nav-item my-2 flex-row">
                    <span><a href="http://vk.com" class="black-link"><i class="fab fa-2x fa-vk mr-1"></i></a></span>
                    <span><a href="http://youtube.ru" class="black-link"><i class="fab fa-2x fa-youtube mr-2"></i></a></span>
                    <span><a href="http://instagram.com" class="black-link"><i class="fab fa-2x fa-instagram mr-2"></i></a></span>
                    <span><a href="http://facebook.com" class="black-link"><i class="fab fa-2x fa-facebook-f"></i></a></span>
                </li>
            </ul>
        </div>
    </div>
</footer>