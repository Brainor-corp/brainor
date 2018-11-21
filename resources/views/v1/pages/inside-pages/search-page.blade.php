@extends('v1.layouts.inside-pages-layout')

@section('styles')
    <link href="{{ asset("v1/css/pages/inside-pages/styles/inside-pages.css") }}" rel="stylesheet">
    <link href="{{ asset("v1/css/pages/inside-pages/media/inside-pages-media.css") }}" rel="stylesheet">
@endsection

@section('headScripts')
@endsection

@section('page-title')
    asdasd
@endsection

@section('content')

    <div class="container">
        <div class="row mb-5">
            @if(isset($results))
                <div class="col-12 mt-5">
                    <h2>Результаты поиска по запросу: «{{ app('request')->input('term') }}»</h2>
                </div>
                @foreach($results as $result)
                    <div class="col-md-6 col-12 mt-5">
                        <a href="{{$result->url}}" class="hvr-grow decoration-none">
                            <div class="rounded p-3">
                                <h3>{{$result->title}}</h3>
                                <p>{!! strlen(strip_tags($result->content)) > 75 ? substr(html_entity_decode(strip_tags($result->content)),0,75)."..." : html_entity_decode(strip_tags($result->content))!!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-12 mt-5">
                    <h2>Результатов по запросу «{{ app('request')->input('term') }}» не найдено.</h2>
                </div>
            @endif

        </div>
    </div>

@endsection

@section('footScripts')
@endsection