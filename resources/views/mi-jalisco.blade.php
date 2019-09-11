@extends('layouts.default')
@section('page-name', 'mi-jalisco')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-lg px-10 lg:px-0">
            <h2 class="font-serif text-6xl text-white">@lang('mi-jalisco.this-is') <span class="font-bold">@lang('mi-jalisco.mi-jalisco')</span></h2>
            <p class="text-lg text-white">@lang('mi-jalisco.subtitle')</p>
        </div>
   </div>
</section>

<section class="videos bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco-2.jpg') }})">
    @foreach ($videos as $video)
        <div id="{{ $video->slug }}" class="video-container container px-10 pb-10 py-24 lg:px-0">
            <div class="w-full text-content">
                <div class="w-5/6 mx-auto shadow-7xl mb-8">{!! $video->embed !!}</div>
                <div class="py-8 text-gray-400 text-2xl leading-tight">@markdown( ${'video'}->{'text_' . $locale} )</div>
            </div>
            <div class="w-full">
                @component('components.share', ['title' => ${'video'}->{'title_' . $locale}, 'href' => route('mi-jalisco').'#'.$video->slug])
                @endcomponent
                <hr class="h-1 bg-gray-400 opacity-25 my-10">
            </div>
        </div>
    @endforeach
    <div class="container px-10 pb-10 pt-0 lg:px-0">
        <div class="w-full px-10">
            <slider 
                class="shadow-2xl outside-arrows" 
                :slides="3" 
                :space="30"  
                :arrowscolor="'text-red-400'"
                :outsidearrows="true"
                ref="carrousel" >
                @foreach ($videos->sortBy('id') as $slide)
                <slide>
                    <a href="{{ $locale == config('app.fallback_locale') ? route('mi-jalisco') : route('localized.mi-jalisco', ['lang' => $locale ]) }}#{{ $slide->slug }}">
                        <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $slide->preview }})">
                            <div class="text-white absolute bottom-8 font-serif" >
                                <h2 class="font-bold text-xl">{{ ${'slide'}->{'title_' . $locale} }}</h2>
                            </div>
                        </div>
                    </a>
                </slide>
                @endforeach
            </slider>
        </div>
    </div>
</section>

@endsection