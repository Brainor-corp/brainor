<div class="container-fluid price-calculation-section py-5 px-0">
    <div class="section-name my-5 text-center">
        <h1>Расчет стоимости проекта</h1>
    </div>
    <div class="container">
        <div class="price-calculation-steps-row mb-5 row justify-content-around">
            <div class="steps px-0 col-auto"><span id="step1" class="active past" data-state="0">Шаг 1</span></div>
            <div class="steps px-0 col-auto"><span id="step2" class="">Шаг 2</span></div>
            <div class="steps px-0 col-auto"><span id="step3" class="">Шаг 3</span></div>
            <div class="steps px-0 col-auto"><span id="step4" class="">Шаг 4</span></div>
            <div class="steps px-0 col-auto"><span id="step5" class="">Шаг 5</span></div>
        </div>
        <div class="price-calculation-content mt-5 row justify-content-around">
            <div class="my-4 my-md-0 col-md-4 col-12 next text-center align-self-center" data-state="1">
                <img src="{{asset('img/calculator/cart.png')}}" alt="">
                <br>
                <span>Интеренет магазин</span>
            </div>
            <div class="my-4 my-md-0 col-md-4 col-12 next text-center align-self-center" data-state="2">
                <img src="{{asset('img/calculator/site.png')}}" alt="">
                <br>
                <span>Сайт компании</span>
            </div>
            <div class="my-4 my-md-0 col-md-4 col-12 next text-center align-self-center" data-state="3">
                <img src="{{asset('img/calculator/phone.png')}}" alt="">
                <br>
                <span>Мобильное приложение</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <span>Текущая стоимость - <span class="text-green price-calculation-total">5000</span></span>
            </div>
            <div class="col-12 price-calculation-warning mt-5">
                <span>Расчет является предварительным, для получения точного просчета  - <a class="green-link" href="#">заполните бриф</a></span>
            </div>
        </div>
    </div>
</div>