@extends('layouts.default')
@section('page-name', 'schedule')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

@if($sliders->count())
<slider class="main-slider">
    @foreach($sliders->sortBy('order') as $slider)
    <slide>
        <div class="multiply flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slider->url) }})">
            <div class="container text-white px-8 py-20 md:py-40">
                @markdown( $slider->text_es )
            </div>
        </div>
    </slide>
    @endforeach
</slider>
@endif

<section class="schedule text-gray-500 bg-contain bg-no-repeat bg-bottom bg-gray-100" style="background-image:url({{ asset('images/bg-eventos.jpg') }})">
    <div class="container pt-16">
        <div class="w-full mb-8">
            <h2 class="text-8xl text-gray-600 font-bold">@lang('schedule.upcoming-events')</h2>
        </div>
        <div class="hidden lg:flex w-full justify-end text-center text-red-400">
            <div class="w-1/5 mb-4">
                <p>@lang('schedule.date')</p>
            </div>
            <div class="w-1/5 mb-4">
                <p>@lang('schedule.place')</p>
            </div>
            <div class="w-1/5 mb-4">
                <p>@lang('schedule.info')</p>
            </div>
        </div>
    </div>
    <div class="w-full relative mb-12">
        <hr class="hidden lg:block line absolute bg-red-400 h-1 w-2/3 bottom-0 right-0">
    </div>
    <div class="container pb-16">
        @foreach($events as $event)
            <div class="event flex flex-wrap mb-20 items-center bg-white text-center shadow-7xl relative">
                <div class="w-full lg:w-1/5 z-0">
                    <div class="event-img" style="background-image:url({{ asset($event->thumb) }})"></div>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <h2 class="text-3xl font-bold font-secondary text-gray-500">{{ $event->name }}</h2>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <p>{{ $event->date_es }}</p>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <p>{{ $event->place }}</p>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <p>{{ $event->text_es }}</p>
                    <a href="{{ $event->url }}" target="{{ $event->target }}" class="button text-xl mx-auto  w-full text-center shadow-7xl mt-8 inline-block">Más info</a>
                </div>
            </div>
        @endforeach
        <div class="w-full events-navigation pt-20">
            {{ $events->links() }}
        </div>
    </div>
</section>


<section class="routes multiply bg-red-500">
    <div class="container py-10 px-10 lg:px-0">
        <div class="py-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_costa_alegre.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Artículos blog</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_huachimontones.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Artículos blog</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_agave.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Artículos blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection