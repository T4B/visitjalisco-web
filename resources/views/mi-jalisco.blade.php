@extends('layouts.default')
@section('page-name', 'mi-jalisco')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco.jpg') }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-lg px-10 lg:px-0">
            <h2 class="font-serif text-gray-500 text-6xl">@lang('mi-jalisco.this-is') <span class="font-bold">@lang('mi-jalisco.mi-jalisco')</span></h2>
            <p class="text-lg text-white">@lang('mi-jalisco.subtitle')</p>
        </div>
   </div>
</section>

<section class="videos bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco-2.jpg') }})">
    @foreach ($videos as $video)
        <div id="{{ $video->slug }}" class="video-container container px-10 pb-10 py-24 lg:px-0">
            <div class="w-full text-content">
                <div class="w-5/6 mx-auto shadow-7xl mb-8">{!! $video->embed !!}</div>
                <div class="py-8 text-gray-400 text-2xl leading-tight">@markdown($video->text_es)</div>
            </div>
            <div class="w-full">
                @component('components.share', ['title' => $video->title_es, 'href' => route('mi-jalisco').'#'.$video->slug])
                @endcomponent
                <hr class="h-1 bg-gray-400 opacity-25 my-10">
            </div>
            {{--<div class="w-full">
                <ul class="w-full lg:w-auto flex justify-start text-2xl">
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="#" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fas', 'plus-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mr-0 lg:mx-1">
                        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.pinterest.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'pinterest']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mx-1">
                        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="mailto:example@example.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['far', 'envelope']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                </ul>
                <hr class="h-1 bg-gray-400 opacity-25 my-10">
            </div>--}}
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
                    <a href="{{ route('mi-jalisco') }}#{{ $slide->slug }}">
                        <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $slide->preview }})">
                            <div class="text-white absolute bottom-8 font-serif" >
                                <h2 class="font-bold text-xl">{{ $slide->title_es }}</h2>
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