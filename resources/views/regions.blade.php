@extends('layouts.default')
@section('page-name', 'regions')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/regions/bg-regions-main.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-6 lg:px-0 text-content">
            <h2 class="text-7xl">@lang('regions.title')</h2>
        </div>
   </div>
</section>

<section class="regions">
    @foreach ($regions as $region)
        <div class="flex flex-wrap w-full {{ $loop->even ? 'flex-row-reverse' : '' }}">
            <div class="region-image w-full lg:w-5/12 bg-cover bg-no-repeat bg-center" style="background-image:url({{ $region->main }})">
            </div>
            <div class="w-full lg:w-7/12 py-16 {{ $loop->even ? 'bg-gray-100' : 'bg-gray-200' }}">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-4/12 px-16 py-12 lg:p-12">
                        <img class="region-map" src="{{ asset('images/'.$region->map) }}">
                    </div>
                    <div class="w-full lg:w-8/12 px-12 lg:border-l border-gray-400">
                        <div class="flex items-center mb-4">
                            <font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red-400 mr-1 text-5xl inline-block"></font-awesome-icon>
                            <h2 class="font-secondary text-5xl font-bold inline-block leading-none text-{{ $region->color }}">{{ ${'region'}->{'name_' . $locale} }}</h2>
                        </div>
                        <div class="text-xl text-gray-400">@markdown( ${'region'}->{'short_description_' . $locale} )</div>
                        <div class="text-center">
                            <a class="button px-8 py-2 shadow-3xl mt-8 mb-4 inline-block rounded-none bg-{{ $region->color }}" href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug]) :  route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}">@lang('regions.info')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>




@endsection