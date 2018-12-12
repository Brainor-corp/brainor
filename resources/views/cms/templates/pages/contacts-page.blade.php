<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "контакты"
 */
?>

@extends('v1.layouts.inside-pages-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
@endsection


@section('headScripts')
    <title>{{$page->title}}</title>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@endsection

@section('page-title')
@endsection


@section('content')
    <div class="container">
        <div class="row my-5 pt-lg-0 pt-4">
            <div class="col-12">
                <div class="align-items-start">
                    <div class="text-justify">
                        <div class="text-justify">
                            <h1>{{$page->title}}</h1>
                            <p>
                                {!! html_entity_decode($page->content) !!}
                            </p>
                            <div class="my-5">
                                {{--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A52e1c98fe6a29e60cd7de5ac23f3d86a4cc80194dd61f37f697a33a03047750e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>--}}
                                <div class="col-12" style="height: auto;">
                                    <script type="text/javascript">
                                        ymaps.ready(init);
                                        var myMap;
                                        var coords = [48.658194, 44.444031];

                                        function init() {
                                            myMap = new ymaps.Map("map", {
                                                center: coords,
                                                zoom: "15"
                                            });
                                            myMap.behaviors
                                            // Отключаем часть включенных по умолчанию поведений:
                                            //  - drag - перемещение карты при нажатой левой кнопки мыши;
                                            //  - magnifier.rightButton - увеличение области, выделенной правой кнопкой мыши.
                                                .disable('scrollZoom');
                                            //на мобильных устройствах... (проверяем по userAgent браузера)
                                            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                                                //... отключаем перетаскивание карты
                                                myMap.behaviors.disable('drag');
                                            }
                                                myPlacemark = new ymaps.Placemark(coords, {hintContent: 'Мы здесь'});

                                            myMap.geoObjects.add(myPlacemark);
                                        }
                                    </script>
                                    <div class="mt-5 mt-md-0" id="map" style="width: 100%; height: 500px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footScripts')
@endsection