<?php
/**
 * class: BRPageTemplate
 * title: Шаблон страницы "портфолио"
 */
?>

@extends('v1.layouts.inside-pages-layout')

@section('meta')
    <title>Портфолио</title>
    <meta name="description" content="Страница портфолио web-студии Brainor." />
@endsection

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
@endsection


@section('headScripts')
    <title>{{$page->title}}</title>
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
                           <div class="row our-clients-section">
                               @php
                                   $dateFrom = app('request')->input('filterDateFrom');
                                   $dateTo = app('request')->input('filterDateTo');
                                   $args = [
                                       'type' => 'page',
                                       'tags' => ['nasha-rabota']
                                   ];
                                   $works = \Bradmin\Cms\Helpers\CMSHelper::getQueryBuilder($args)
                                   ->when(isset($dateFrom), function ($query) use ($dateFrom){
                                       return $query->where('published_at', '>=', $dateFrom);
                                   })
                                   ->when(isset($dateTo), function ($query) use ($dateTo){
                                       return $query->where('published_at', '<=', date('Y-m-d', strtotime($dateTo. ' + 1 days')));
                                   })
                                   ->orderBy('published_at','desc')
                                   ->paginate(6);
                               @endphp
                               @foreach($works as $work)
                                   <div class="our-clients-img col-12 col-md-6 p-3 w-100" style="background-image: url({{'../../../../../img/works/' . $work->slug . '.png'}})">
                                       <a href="{{$work->url}}">
                                           <div class="our-clients-img-blur"></div>
                                           <div class="our-clients-img-inner">
                                               <div class="row text-center h-100">
                                                   <div class="col-12 align-self-center px-5">
                                                       <img class="work-logo" src="{{asset('img/works/logo-' . $work->slug . '.png')}}" alt="">
                                                   </div>
                                                   @if(isset($work->description))
                                                       <div class="col-12 align-self-center green-hover-link work-description">
                                                           <h4 class="my-2">{{$work->description}}
                                                           </h4>
                                                       </div>
                                                   @endif
                                               </div>
                                           </div>
                                       </a>
                                   </div>
                               @endforeach
                               <div class="col-12 mt-3">
                                   <div class="row justify-content-center">
                                       <div class="col-auto page-link-no-focus">
                                           {{ $works->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                                       </div>
                                   </div>
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