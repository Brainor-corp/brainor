@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img width="80" style="margin-right: 10px;" align="center" src="{{asset('v1/img/logo/logo-white.svg')}}" alt=""><span class="header-text">{{ config('app.name') }}</span>
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
        &copy; Юридическая фирма «Прецедент»  1999-{{ date('Y') }}
            <img width="15px" style="margin-left: 5px;margin-right:3px;vertical-align: middle;" src="{{asset('v1/img/icons/marker.svg')}}" alt="">г. Волгоград, ул. Уличная, д.1
            <img width="15px" style="margin-left: 5px;margin-right:3px;vertical-align: middle;" src="{{asset('v1/img/icons/phone.svg')}}" alt="">+7 (8442) 999-999
            <img width="15px" style="margin-left: 5px;margin-right:3px;vertical-align: middle;" src="{{asset('v1/img/icons/mail.svg')}}" alt="">precedent.ufo@gmail.com
        @endcomponent
    @endslot
@endcomponent
