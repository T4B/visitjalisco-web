@extends('layouts.default')
@section('page-name', 'routes')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $route->main }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold">{{ $route->name_es }}</h2>
        </div>
   </div>
</section>


<section class="route">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2 text-2xl text-gray-500 px-10 lg:px-0">
                @markdown($route->full_description_es)
            </div>
            <div class="w-full lg:w-1/2 px-12">
                <img src="{{ $route->map }}">
            </div>
        </div>
    </div>
</section>

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

<section class="places">
    <div class="w-full relative">
        <hr class="hidden lg:block line absolute bg-red-400 h-1 w-2/3 bottom-0 right-0 mb-12">
    </div>
    <div class="container">
        @foreach ($route->places as $place )
        <div class="flex flex-wrap items-center my-24">
            <div class="w-full lg:w-1/3 bg-cover bg-no-repeat bg-center p-32 shadow-7xl" style="background-image:url({{ $place->url }})"></div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-10 lg:px-0">
                <h2 class="text-6xl font-bold text-gray-400">{{ $place->name_es }}</h2>
                <p class="text-gray-400">{{ $place->subtitle_es }}</p>
                @markdown( $place->description_es )
            </div>
        </div>
        @endforeach
        <div class="w-full my-12 flex flex-wrap px-10 lg:px-0">
            <ul class="w-full lg:w-1/2 flex justify-start text-2xl">
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
            <div class="w-full lg:w-1/2 text-right my-6 lg:my-0">
                <a href="{{ route('routes') }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">Todas las rutas</a>
            </div>
        </div>
        
    </div>
    
</section>

@endsection