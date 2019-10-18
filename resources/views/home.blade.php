@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

@if($sliders->count())
<slider class="main-slider">
    @foreach($sliders->sortBy('order') as $slider)
    <slide>
        @if (empty($slider->link))
        <div class="slide multiply flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slider->url) }})">
            <div class="container text-white px-8 py-20 md:py-40">
                @markdown( ${'slider'}->{'text_' . $locale} )
            </div>
        </div>
        @else
            <a href="{{ $slider->link }}">
            <div class="slide multiply flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slider->url) }})">
                <div class="container text-white px-8 py-20 md:py-40">
                    @markdown( ${'slider'}->{'text_' . $locale} )
                </div>
            </div>
            </a>
        @endif
    </slide>
    @endforeach
</slider>
@endif

<section class="regions font-serif">
    <div class="container py-16">
        <div class="flex flex-wrap text-black">
            <div class="flex flex-row items-center w-full md:w-1/3 px-10 lg:px-0 py-8">
                <div class="w-full flex-1 leading-tight font-light">
                    <h1 class="text-5xl">@lang('home.this-is') </br><span class="font-bold">@lang('home.mi-jalisco')</span></h1>
                    <p class="text-2xl py-8">@lang('home.mi-jalisco-text')</p>
                </div>
            </div>
            <div class="w-full md:w-7/12 ml-auto">
                <slider class="shadow-2xl">
                    @foreach ($videos as $video)
                    <slide>
                        <a href="{{ route('mi-jalisco') }}#{{ $video->slug }}">
                            <div class="multiply py-56 px-20  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset($video->preview) }})">
                                <div class="text-white absolute bottom-16">
                                    <h2>{{ ${'video'}->{'title_' . $locale} }}</h2>
                                    <p>{{ ${'video'}->{'subtitle_' . $locale} }}</p>
                                </div>
                            </div>
                        </a>
                    </slide>
                    @endforeach
                </slider>
            </div>
        </div>
    </div>
</section>

<section class="categories font-secondary leading-tight">
    <div class="flex flex-wrap text-white text-center font-bold">
        <a class="w-1/2 lg:w-1/5" href="{{ route('experiences') }}">
            <div class="category" style="background-image:url({{ asset('images/categories/experiensa_home_titulo.jpg') }})">
                <h2 class="text-2xl">@lang('categories.experiences')</h2>
            </div>
        </a>
        @foreach ($experiences as $experience)
            <a class="w-1/2 lg:w-1/5" href="{{ route('experiences.category', ['category' => $experience->slug ]) }}">
                <div class="category" style="background-image:url({{ $experience->url }})">
                    <h2 class="text-2xl">{{ ${'experience'}->{'name_' . $locale} }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</section>

@if (count($events))
<section class="events text-gray-500 bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-eventos.jpg') }})">
    <div class="container py-16">
        @foreach($events->sortBy('id') as $event)
            <div class="flex flex-wrap mb-8">
                <div class="w-full md:w-1/2 bg-white z-0">
                    <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-7xl z-10" style="background-image:url({{ asset($event->large) }})"></div>
                </div>
                <div class="w-full md:w-1/2 bg-white p-8">
                    <h2>{{ $event->name }}</h2>
                    <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red-400 mr-1"></font-awesome-icon>{{ $event->place }}</p>
                    <p>{{ ${'event'}->{'date_' . $locale} }}</p>
                </div>
            </div>
        @endforeach
        <div class="flex w-full">
            <a class="button font-secondary text-2xl font-bold ml-auto px-8 py-2 shadow-7xl" href="{{ route('schedule') }}">@lang('home.more-events')</a>
        </div>
    </div>
</section>
@endif

@if (count($routes))
<section class="routes multiply bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-routes.jpg') }})">
    <div class="container py-10 px-10 lg:px-0">
        <div class="w-full bg-white p-10 rounded-lg">
            <a href="{{ route('route', ['slug' => $first_route->slug ]) }}"><div class="w-full bg-cover bg-center bg-no-repeat p-40" style="background-image:url({{ $first_route->main }})"></div></a>
            <div class="px-4 text-sm">
                <a href="{{ route('route', ['slug' => $first_route->slug ]) }}"><h2 class="font-secondary font-bold text-2xl my-2">{{ ${'first_route'}->{'name_' . $locale} }}</h2></a>
                {{-- @markdown( ${'first_route'}->{'short_description_' . $locale} ) --}}
            </div>
        </div>

        <div class="py-6">
            <div class="flex flex-wrap -mx-2">
                @foreach ($routes as $route)
                    @if ($loop->first) @continue @endif
                    <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                        <div class="bg-white p-4 rounded-lg text-center">
                            <a href="{{ route('route', ['slug' => $route->slug ]) }}"><div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ $route->main }})"></div></a>
                            <a href="{{ route('route', ['slug' => $route->slug ]) }}"><h2 class="font-secondary font-bold text-2xl my-2 leading-none">{{ ${'route'}->{'name_' . $locale} }}</h2></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="flex w-full py-4">
            <a class="font-serif text-3xl ml-auto text-white" href="{{ route('routes') }}">@lang('home.more-routes')</a>
        </div>
    </div>
</section>
@endif

@endsection