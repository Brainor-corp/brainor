<div class="container-fluid px-5 main-page-header">

    <img src="{{asset('img/bg/flower.png')}}" alt="" class="bg-pics bg-pic-flower">
    <img src="{{asset('img/bg/keyboard.png')}}" alt="" class="bg-pics bg-pic-keyboard">
    <img src="{{asset('img/bg/notebook.png')}}" alt="" class="bg-pics bg-pic-notebook">
    <img src="{{asset('img/bg/pen.png')}}" alt="" class="bg-pics bg-pic-pen">
    <img src="{{asset('img/bg/mouse.png')}}" alt="" class="bg-pics bg-pic-mouse">
    <div class="w-100 h-100 blur-block">
        <img src="{{asset('img/bg/flower.png')}}" alt="" class="bg-pics bg-pic-flower">
        <img src="{{asset('img/bg/keyboard.png')}}" alt="" class="bg-pics bg-pic-keyboard">
        <img src="{{asset('img/bg/notebook.png')}}" alt="" class="bg-pics bg-pic-notebook">
        <img src="{{asset('img/bg/pen.png')}}" alt="" class="bg-pics bg-pic-pen">
        <img src="{{asset('img/bg/mouse.png')}}" alt="" class="bg-pics bg-pic-mouse">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{route('/')}}"><img src="{{asset('img/logo/logo.svg')}}" alt="" class="logo-svg"></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100 flex-column" id="navbarSupportedContent">
            <ul class="navbar-nav row w-100 navbar">
                <li class="nav-item col-lg-3 col-12 my-3 my-lg-0 align-self-center  ">
                    <span class="text-nowrap"><i class="fas fa-phone mr-1"></i>8(800)888-99-88</span>
                </li>
                <li class="nav-item col-lg-3 col-12 my-3 my-lg-0 align-self-center  ">
                    <span class="text-nowrap"><i class="fas fa-envelope mr-1"></i>client@brainor.ru</span>
                </li>
                <li class="nav-item col-lg-3 col-12 my-3 my-lg-0 align-self-center">
                    <span><i class="fab fa-2x fa-instagram"></i></span>
                    <span><i class="fab fa-2x fa-vk"></i></span>
                    <span><i class="fab fa-2x fa-facebook-f"></i></span>
                    <span><i class="fab fa-2x fa-youtube"></i></span>
                </li>
                <li class="nav-item col-lg-3 col-12 my-3 my-lg-0 p-0 align-self-center">
                    <div class="searchboxwrapper">
                        <input class="searchbox w-100" type="text" value="" name="search_input" placeholder="Поиск по сайту..." id="search_input">
                        <i class="fas fa-1x fa-search searchsubmit"></i>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>