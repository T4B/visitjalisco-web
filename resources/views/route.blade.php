@extends('layouts.default')
@section('page-name', 'routes')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $route->main }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold">{{ ${'route'}->{'name_' . $locale} }}</h2>
        </div>
   </div>
</section>


<section class="route">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2 text-2xl text-gray-500 px-10 lg:px-0">
                @markdown( ${'route'}->{'full_description_' . $locale} )
            </div>
            <div class="w-full lg:w-1/2 px-12">
                <img src="{{ $route->map }}">
            </div>
        </div>
    </div>
</section>

@if ( count($route->gallery()) )
<section class="gallery bg-cover bg-no-repeat bg-center" style="background-image:url({{ $route->gallerybackground }})">
    <div class="container py-12">
        <slider class="shadow-2xl">
            @foreach ($route->gallery() as $photo)
            <slide>
                <div class="multiply py-56 px-20  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $photo['image'] }})">
                </div>
            </slide>
            @endforeach
        </slider>
    </div>
</section>
@endif

<section class="places">
    <div class="w-full relative">
        <hr class="hidden lg:block line absolute bg-red-400 h-1 w-2/3 bottom-0 right-0 mb-12">
    </div>
    <div class="container">
        @foreach ($route->places as $place )
        <div class="flex flex-wrap items-center my-24">
            <div class="w-full lg:w-1/3 bg-cover bg-no-repeat bg-center p-32 shadow-7xl" style="background-image:url({{ $place->url }})"></div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-10 lg:px-0">
                <h2 class="text-6xl font-bold text-gray-400">{{ ${'place'}->{'name_' . $locale} }}</h2>
                <p class="text-gray-400">{{ ${'place'}->{'subtitle_' . $locale} }}</p>
                @markdown( ${'place'}->{'description_' . $locale} )
            </div>
        </div>
        @endforeach
        <div class="w-full my-12 flex flex-wrap px-10 lg:px-0">
            @component('components.share', [
                'title' => ${'route'}->{'name_' . $locale}, 
                'href' => route('route', ['slug' => $route->slug ])])
            @endcomponent
            <div class="w-full lg:w-1/2 text-right my-6 lg:my-0">
                <a href="{{ route('routes') }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('routes.all')</a>
            </div>
        </div>
        
    </div>
    
</section>

@endsection