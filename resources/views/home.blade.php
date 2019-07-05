@extends('layouts.default')

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
                    <slide>
                        <div class="multiply py-56 px-20  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/mi_jalisco_home.jpg') }})">
                            <div class="text-white absolute bottom-16">
                                <h2>Tapalpa</h2>
                                <p>La paz e inspiración del bosque</p>
                            </div>
                        </div>
                    </slide>
                </slider>
            </div>
        </div>
    </div>
</section>

<section class="categories font-secondary leading-tight">
    <div class="flex flex-wrap text-white text-center font-bold">
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_titulo.jpg') }})">
            <h2 class="text-2xl">@lang('categories.experiences')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_cultura.jpg') }})">
            <h2 class="text-2xl">@lang('categories.culture')</h2>
        </div>
         <div class="category w-1/2 lg:w-1/5 " style="background-image:url({{ asset('images/categories/experiensa_home_deporte.jpg') }})">
            <h2 class="text-2xl">@lang('categories.sports')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_gastronomia.jpg') }})">
            <h2 class="text-2xl">@lang('categories.gastronomic')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_lgbt.jpg') }})">
            <h2 class="text-2xl">@lang('categories.lgbtttiq')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_naturaleza.jpg') }})">
            <h2 class="text-2xl">@lang('categories.nature')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_negocios.jpg') }})">
            <h2 class="text-2xl">@lang('categories.business')</h2>
        </div>
         <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_religioso.jpg') }})">
            <h2 class="text-2xl">@lang('categories.religious')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_salud.jpg') }})">
            <h2 class="text-2xl">@lang('categories.health')</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5" style="background-image:url({{ asset('images/categories/experiensa_home_playa.jpg') }})">
            <h2 class="text-2xl">@lang('categories.beach')</h2>
        </div>
    </div>
</section>

<section class="events text-gray-500 bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-eventos.jpg') }})">
    <div class="container py-16">
        @foreach($events->sortBy('id') as $event)
            <div class="flex flex-wrap mb-8">
                <div class="w-full md:w-1/2 bg-white z-0">
                    <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-7xl z-10" style="background-image:url({{ asset($event->large) }})"></div>
                </div>
                <div class="w-full md:w-1/2 bg-white p-8">
                    <h2>{{ $event->name }}</h2>
                    <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>{{ $event->place }}</p>
                    <p>{{ $event->date_es }}</p>
                </div>
            </div>
        @endforeach
        {{-- <div class="flex flex-wrap mb-8">
            <div class="w-full md:w-1/2 bg-white z-0">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-7xl z-10" style="background-image:url({{ asset('images/events/eventos_home_open_vallarta.jpg') }})"></div>
            </div>
            <div class="w-full md:w-1/2 bg-white p-8">
                <h2>Open Vallarta</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Puerto Vallarta</p>
                <p>29 de abril - 5 de mayo</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-full md:w-1/2 bg-white z-0">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-7xl z-10" style="background-image:url({{ asset('images/events/eventos_home_mariachi.jpg') }})"></div>
            </div>
            <div class="w-full md:w-1/2 bg-white p-8">
                <h2>Encuentro Internacional de Mariachi y Charrería 2019</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Guadalajara</p>
                <p>23 de agosto - 1 de septiembre</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-full md:w-1/2 bg-white z-0">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-7xl z-10" style="background-image:url({{ asset('images/events/eventos_home_coordenada.jpg') }})"></div>
            </div>
            <div class="w-full md:w-1/2 bg-white p-8">
                <h2>Coordenada</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Guadalajara</p>
                <p>18 - 19 de octubre</p>
            </div>
        </div> --}}
        <div class="flex w-full">
            <a class="font-secondary text-2xl font-bold ml-auto bg-red text-white px-8 py-2 rounded-lg shadow-7xl" href="{{ route('eventos') }}">@lang('home.more-events')</a>
        </div>
    </div>
</section>

<section class="routes multiply bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-routes.jpg') }})">
    <div class="container py-10 px-10 lg:px-0">
        <div class="w-full bg-white p-10 rounded-lg">
            <img class="w-full" src="{{ asset('images/routes/ruta_banner_fransiscana.jpg') }}">
            <div class="px-4 text-sm">
                <h2 class="font-secondary font-bold text-3xl my-2">Ruta Franciscana de Tlajomulco</h2>
                <p>Esta ruta recorre un total de 10 templos donde podrás conocer parte
                    de la historia de Tlajomulco, 
                    uno de los municipios que conforman la Zona Metropolitana de
                    Guadalajara ubicándose al sur de la perla tapatía. 
                    ¡Descúbrelos!</p>
            </div>
        </div>

        <div class="py-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_costa_alegre.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta Costalegre</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_huachimontones.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta Guachimontones</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta_banner_agave.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta Paisaje Agavero</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full py-4">
            <a class="font-serif text-3xl ml-auto text-white" href="{{ route('rutas') }}">@lang('home.more-routes')</a>
        </div>
    </div>
</section>

@endsection