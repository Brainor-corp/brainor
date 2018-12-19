<div class="container-fluid top-form p-lg-4 p-3">
    <div class="row">
        <div class="col-12 col-lg-7 col-xl-5 top-margin mt-lg-0 ml-lg-5">
            <h2 class="text-center animate-headline text-lg-left text-uppercase">Комплексные решения по разработке <br> <span id="dynamic_changed_text"></span></h2>
            <div class="top-form-container triangle-border mt-3">
                <div class="form-group left-right-border p-4 text-center" id="price-form">
                    <form id="SendMailForm" method="post" action="/SendMail">
                        <h4 class="mb-md-5 mb-3">Заполните форму и узнайте стоимость вашего проекта</h4>
                        <input type="text" name="name" class="form-control my-2" placeholder="Ваше имя" required>
                        <input type="tel" name="tel" class="form-control my-2" placeholder="Ваш телефон" required>
                        <textarea type="text" name="text" class="form-control bg-transparent my-2 no-focus " placeholder="Особенности проекта" cols="40" rows="2"></textarea>
                        <button type="submit" class="btn hvr-bounce-to-bottom mt-md-5 mt-4 mb-md-2 mb-0 bg-transparent">Просчитать проект</button>
                        <div class="d-none text-center" id="waitRegister">
                            <img src="{{ asset('img/wait.gif') }}" class="w-25">
                        </div>
                        <div class="text-center alert d-none" id="registerAjaxResult">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>