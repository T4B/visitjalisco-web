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
        <div class="slide multiply flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slider->url) }})">
            <div class="container text-white px-8 py-20 md:py-40">
                @markdown( ${'slider'}->{'text_' . $locale} )
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
                    <p>{{ ${'event'}->{'date_' . $locale} }}</p>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <p>{{ $event->place }}</p>
                </div>
                <div class="w-full lg:w-1/5 p-8">
                    <p>{{ ${'event'}->{'text_' . $locale} }}</p>
                    <a href="{{ $event->url }}" target="{{ $event->target }}" class="button text-xl mx-auto  w-full text-center shadow-7xl mt-8 inline-block">@lang('schedule.more-info')</a>
                </div>
            </div>
        @endforeach
        <div class="w-full events-navigation pt-20">
            {{ $events->links() }}
        </div>
    </div>
</section>


@component('components.posts-slider', ['posts' =>$posts])
@endcomponent

@endsection