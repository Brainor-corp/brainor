<div class="container-fluid price-calculation-section py-5 px-0">
    <div class="section-name my-5 text-center">
        <h1>Расчет стоимости проекта</h1>
    </div>
    <div class="container price-calculation-content">
        <div class="price-calculation-steps-row mb-5 row justify-content-around">
            <div class="steps px-0 col-auto"><span id="step1" class="active past" data-state="0">Тип продукта</span></div>
        </div>
        <div class=" mt-5 row justify-content-around">
            <div id="choice1" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center" data-price="0">
                <img src="{{asset('img/calculator/site.png')}}" alt="">
                <br>
                <span>Лэндинг</span>
            </div>
            <div id="choice2" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center" data-price="10000">
                <img src="{{asset('img/calculator/cart.png')}}" alt="">
                <br>
                <span>Магазин</span>
            </div>
            <div id="choice3" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center" data-price="5000">
                <img src="{{asset('img/calculator/site.png')}}" alt="">
                <br>
                <span>Сайт компании</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                Стоимость на данном этапе - <span class="price-calculation-total">0</span> <i class="fa fa-ruble-sign"></i>.
            </div>
            <div class="col-12 price-calculation-warning mt-5">
                <span>Расчет является предварительным, для получения точного просчета  - <a class="green-link" href="#">заполните бриф</a></span>
            </div>
        </div>
    </div>
</div>