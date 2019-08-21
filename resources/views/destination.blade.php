@extends('layouts.default')
@section('page-name', 'destination')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $destination->url }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold leading-none">{{ $destination->name_es }}</h2>
            @markdown( $destination->subtitle_es )
        </div>
   </div>
</section>


<section class="destination">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full px-10 lg:px-0 text-content">
                @markdown($destination->description_es)
            </div>
        </div>
    </div>
</section>


<section class="social">
    <div class="container">
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
                <a href="{{ route('experiences') }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">Todas las experiencias</a>
            </div>
        </div>
        
    </div>
    
</section>

@component('components.posts-slider', ['posts' =>$posts])
@endcomponent

@endsection