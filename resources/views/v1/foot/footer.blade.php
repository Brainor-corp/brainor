<footer class="p-3 container-fluid footer-border @if(!isset($isMainPage)) inside-page-footer @endif">
    <div class="d-flex flex-wrap justify-content-around align-items-center">
        <div class="d-flex flex-column col-lg-auto col-12 mt-5 mx-4 mt-lg-0 mx-lg-0 text-lg-left text-center">
            <a href="/"><img src="{{asset('img/logo/animate-logo.svg')}}" alt="" class="footer-logo-svg"></a>
        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-lg-0 mx-lg-0 text-lg-left text-center col-lg-auto col-12 px-0" <?php if(isset($isMainPage)): ?> id="question-link-footer" <?php endif; ?>>
            @if(!isset($isMainPage))
                <a class="black-link" href="#" data-toggle="modal" data-target="#questModal"><b>Задать вопрос</b></a>
            @else
                <a class="black-link" href="#price-form"><b>Задать вопрос</b></a>
            @endif

        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-lg-0 mx-lg-0 text-lg-left text-center col-lg-auto col-12 px-0">
            <a class="black-link" href="/technologies"><b>Технологии</b></a>
        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-lg-0 mx-lg-0 text-lg-left text-center col-lg-auto col-12 px-0">
            <a class="black-link" href="/portfolio"><b>Портфолио</b></a>
        </div>
        <div class="d-flex flex-column mt-5 mx-4 mt-lg-0 mx-lg-0 text-lg-left text-center col-lg-auto col-12 px-0">
            <a class="black-link" href="/contacts"><b>Контакты</b></a>
            <br>
            <ul class="navbar-nav w-100">
                <li class="nav-item my-2">
                    <span class="text-nowrap"><i class="fas fa-phone mr-1 fa-flip-horizontal"></i><a class="black-link" href="tel:+79054339913">+7(905)-433-99-13</a></span>
                </li>
                <li class="nav-item my-2">
                    <span class="text-nowrap"><i class="fas fa-envelope mr-2"></i><a class="black-link" href="mailto:tasks@brainor.ru">tasks@brainor.ru</a></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <form id="SendMailForm" method="post" action="/SendMail">
        <div class="modal fade modal-portfolio-margin" id="questModal" tabindex="-1" role="dialog" aria-labelledby="questModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заполните форму и узнайте стоимость вашего проекта</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <input type="text" name="name" class="form-control my-2 border-left-0 border-right-0 border-top-0 rounded-0" placeholder="Ваше имя" required>
                            <input type="tel" name="tel" class="form-control my-2 border-left-0 border-right-0 border-top-0 rounded-0" placeholder="Ваш телефон" required>
                            <textarea type="text" name="text" class="form-control bg-transparent my-2 no-focus " placeholder="Особенности проекта" cols="40" rows="2"></textarea>
                            <div class="d-none text-center" id="waitRegister">
                                <img src="{{ asset('img/wait.gif') }}" class="w-25">
                            </div>
                            <div class="text-center alert d-none" id="registerAjaxResult">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn hvr-bounce-to-top bg-transparent" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn hvr-bounce-to-bottom bg-transparent">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</footer>