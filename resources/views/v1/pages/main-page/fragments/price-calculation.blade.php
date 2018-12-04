<div class="container-fluid price-calculation-section py-5 px-0">
    <div class="section-name my-5 text-center">
        <h1>Расчет стоимости проекта</h1>
    </div>
    <div class="container price-calculation-content">
        <div class="price-calculation-steps-row mb-5 row justify-content-around">
            <div class="steps px-0 col-auto"><span id="step1" class="active past" data-state="0">Тип</span></div>
        </div>
        <div class="my-4 px-3 px-md-0 row justify-content-around">
            <div id="choice1" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center priceable" data-price="0">
                <img src="{{asset('img/calculator/site.png')}}" alt="">
                <br>
                <span>Лэндинг</span>
            </div>
            <div id="choice2" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center priceable" data-price="10000">
                <img src="{{asset('img/calculator/cart.png')}}" alt="">
                <br>
                <span>Магазин</span>
            </div>
            <div id="choice3" class="my-4 picture-next my-md-0 col-md-4 col-12 next text-center align-self-center priceable" data-price="5000">
                <img src="{{asset('img/calculator/site.png')}}" alt="">
                <br>
                <span>Сайт компании</span>
            </div>
        </div>
        <div class="row d-none d-md-block">
            <div class="col-12 my-1">
                <span class="text-green">Лендинг</span> — веб-страница, основной задачей которой является сбор контактных данных целевой аудитории. Используется для усиления эффективности рекламы, увеличения аудитории. Целевая страница обычно содержит информацию о товаре или услуге.
            </div>
            <div class="col-12 my-1">
                <span class="text-green">Интернет-магазин</span> — сайт, торгующий товарами посредством сети Интернет. Позволяет пользователям онлайн сформировать заказ на покупку, выбрать способ оплаты и доставки заказа, оплатить заказ.
            </div>
            <div class="col-12 my-1">
                <span class="text-green">Сайт компании</span> — содержит полную информацию о компании, услугах/продукции, событиях в жизни компании. Зачастую содержит различные функциональные инструменты для работы с контентом (поиск и фильтры, календари событий, фотогалереи, корпоративные блоги, форумы).
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 my-4">
                Стоимость на данном этапе - <span class="text-nowrap"><span class="price-calculation-total text-green">0</span> р</span>.
            </div>
            <div class="col-12 price-calculation-warning">
                <span>Расчет является предварительным, для получения точного просчета  - <a class="green-link" href="#">заполните бриф</a></span>
            </div>
        </div>
    </div>
</div>