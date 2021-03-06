<div class="container-fluid price-calculation-section pb-5 px-0">
    <div class="section-name my-5 text-center">
        <h1>Расчет стоимости проекта</h1>
    </div>
    <div class="container price-calculation-content">
        <div class="price-calculation-steps-row mb-5 row justify-content-around">
            <div class="steps px-0 col-auto"><span id="step1" class="active nav-step" data-state="0">Тип</span></div>
        </div>
        <div class="my-md-4 my-0 px-3 px-md-0 row justify-content-around">
            <div id="choice1" class="my-4 picture-next my-md-0 col-4 next text-center align-self-center priceable" data-price="0">
                <div class="row h-100">
                    <div class="col-12 align-self-start picture-next-picture">
                        <img class="img-fluid" src="{{asset('img/calculator/site.png')}}" alt="">
                    </div>
                    <div class="col-12 align-self-md-end align-self-start picture-next-text">
                        <span>Лэндинг</span>
                    </div>
                </div>
            </div>
            <div id="choice2" class="my-4 picture-next my-md-0 col-4 next text-center align-self-center priceable" data-price="10000">
                <div class="row h-100">
                    <div class="col-12 align-self-start picture-next-picture">
                        <img class="img-fluid" src="{{asset('img/calculator/cart.png')}}" alt="">
                    </div>
                    <div class="col-12 align-self-md-end align-self-start picture-next-text">
                        <span>Магазин</span>
                    </div>
                </div>
            </div>
            <div id="choice3" class="my-4 picture-next my-md-0 col-4 next text-center align-self-center priceable" data-price="5000">
                <div class="row h-100">
                    <div class="col-12 align-self-start picture-next-picture w">
                        <img class="img-fluid" src="{{asset('img/calculator/copyright.png')}}" alt="">
                    </div>
                    <div class="col-12 align-self-md-end align-self-start picture-next-text">
                        <span>Сайт компании</span>
                    </div>
                </div>
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
                <span>Расчет является предварительным, для получения точного просчета  - <a class="green-link" href="{{ asset('docs/brif.doc') }}">заполните бриф</a></span>
            </div>
        </div>
    </div>
</div>