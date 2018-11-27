@extends('v1.layouts.auth-pages-layout')

@section('content')
    <div class="card-header">{{ __('Подтвердите свой адрес эл. почты') }}</div>

    <div class="card-body">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('Новая ссылка верификации была отправлена на Ваш почтовый ящик.') }}
            </div>
        @endif

        {{ __('Проверьте Ваш почтовый ящик на предмет письма с подтверждением.') }}
        {{ __('Если вы не получили письмо') }}, <a href="{{ route('verification.resend') }}">{{ __('нажмите сюда, что бы запросить новую ссылку') }}</a>.
    </div>
@endsection
