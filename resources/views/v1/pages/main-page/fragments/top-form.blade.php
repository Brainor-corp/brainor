<div class="container-fluid top-form p-lg-5 p-3">
    <div class="row">
        <div class="col-12 col-lg-5">
            <h1 class="text-center text-lg-left text-uppercase">Комплексные решения по разработке <br> <span id="dynamic_changed_text"></span></h1>
            <div class="top-form-container triangle-border mt-5">
                <div class="form-group left-right-border p-5 text-center" id="price-form">
                    <form id="SendMailForm" method="post" action="/SendMail">
                        <h4 class="mb-5">Заполните форму и узнайте стоимость вашего проекта</h4>
                        <input type="text" name="name" class="form-control my-2" placeholder="Ваше имя" required>
                        <input type="tel" name="tel" class="form-control my-2" placeholder="Ваш телефон" required>
                        <input type="text" name="text" class="form-control my-2" placeholder="Особенности проекта">
                        <button type="submit" class="btn hvr-bounce-to-bottom mt-5 mb-2 bg-transparent">Просчитать проект</button>
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