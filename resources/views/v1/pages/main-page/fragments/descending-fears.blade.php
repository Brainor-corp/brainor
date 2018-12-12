<div class="container-fluid descend-fears-section py-5 px-3">
    <div class="section-name my-5 text-center">
        <h1>Развенчаем Ваши страхи</h1>
    </div>
    <div class="row mx-lg-5">
        <div class="col-lg-4 col-12">
            <ul class="nav flex-column" id="myTab" role="tablist">
                @php($i=0)
                @foreach($fears as $fear)
                    <li class="nav-item fear-block">
                        <a class="nav-link py-5 d-flex fear flex-row  @if($i==0) active @endif flex-md-nowrap flex-wrap" id="tab{{$fear->id}}" data-toggle="tab" href="#fear{{$fear->id}}" role="tab" aria-controls="fear{{$fear->id}}" aria-selected="true">
                            <span class="text-nowrap mr-3">Страх #
                                <span class="descend-fears-fear-number">{{++$i}}</span>:
                            </span>
                            <span class="descend-fears-fear">{!! html_entity_decode(strip_tags($fear->description)) !!}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12 col-lg-8 d-flex flex-column justify-content-between">
            <div class="tab-content" id="myTabContent">
                @php($i=1)
                @foreach($fears as $fear)
                    <div class="tab-pane fade py-5 @if($i==1) show active @endif" id="fear{{$fear->id}}" role="tabpanel" aria-labelledby="tab{{$fear->id}}">
                        {!! html_entity_decode(strip_tags($fear->content)) !!}
                    </div>
                    @php($i++)
                @endforeach
            </div>
            <div class="row px-3" id="price-btn-fears">
                <a href="#price-form" class="btn hvr-bounce-to-bottom green-btn col-12 col-md-6">Просчитать стоимость проекта</a>
            </div>
        </div>
    </div>
</div>