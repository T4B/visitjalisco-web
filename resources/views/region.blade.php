@extends('layouts.default')
@section('page-name', 'region')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $region->interior }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-{{$region->color}} mr-1 text-5xl inline-block"></font-awesome-icon>
            <h2 class="text-7xl inline-block">{{ $region->name_es }}</h2>
        </div>
   </div>
</section>

<section class="region">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-1/2 text-2xl text-gray-500 px-12 lg:px-0">
                @markdown($region->full_description_es)
            </div>
            <region-map :region='@json($region)'></regions-map>
        </div>
    </div>
</section>

<section class="gallery bg-cover bg-no-repeat bg-center" style="background-image:url({{ $region->main }})">
    <div class="container py-12">
        <slider-carousel 
            :slides-per-view="4"
            :slides='@json($region->gallery())'>
        </slider-carousel>
    </div>
</section>

<section class="videos py-12">
    <div class="container px-10 lg:px-0">
        <div class="w-full px-10">
            <slider 
                class="shadow-2xl" 
                :slides="3" 
                :space="30"  
                :arrowscolor="'text-red-400'"
                :outsidearrows="true"
                ref="carrousel" >
                <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $region->main }})">
                    <div class="text-white absolute bottom-8 font-serif" >
                        <h2 class="font-bold text-xl">Test test test</h2>
                        <p>Test test test</p>
                    </div>
                    </div>
                </slide>
                    <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $region->main }})">
                    <div class="text-white absolute bottom-8 font-serif" >
                        <h2 class="font-bold text-xl">Test test test</h2>
                        <p>Test test test</p>
                    </div>
                    </div>
                </slide>
                    <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $region->main }})">
                    <div class="text-white absolute bottom-8 font-serif" >
                        <h2 class="font-bold text-xl">Test test test</h2>
                        <p>Test test test</p>
                    </div>
                    </div>
                </slide>
            </slider>
        </div>
    </div>
</section>

@endsection