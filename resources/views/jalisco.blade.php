@extends('layouts.default')
@section('page-name', 'jalisco')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-jalisco.jpg') }})">
    <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            @markdown($jalisco->header_text)
        </div>
    </div>
</section>

<section class="history">
    <div class="container py-12">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-5/12 text-2xl text-gray-500 px-10 lg:px-0">
                @markdown($jalisco->history)
            </div>
            <div class="w-full lg:w-6/12 ml-auto px-10 lg:px-0">
                <slider class="slider shadow-2xl">
                    <slide>
                        <div class="py-56 px-20  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/mazamitla.jpg') }})">
                            <div class="text-white absolute bottom-16">
                                <h2>Mazamitla</h2>
                            </div>
                        </div>
                    </slide>
                </slider>
                <div class="py-6 w-full">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-1/3">
                            <div class="bg-transparent p-4 rounded-lg text-center">
                                <div class="bg-cover bg-no-repeat bg-center p-12 shadow-xl" style="background-image:url({{ asset('images/jalisco-thumb-1.jpg') }})"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="bg-transparent p-4 rounded-lg text-center">
                                <div class="bg-cover bg-no-repeat bg-center p-12 shadow-xl" style="background-image:url({{ asset('images/jalisco-thumb-2.jpg') }})"></div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3">
                            <div class="bg-transparent p-4 rounded-lg text-center">
                                <div class="bg-cover bg-no-repeat bg-center p-12 shadow-xl" style="background-image:url({{ asset('images/jalisco-thumb-3.jpg') }})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="demography bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-demography.jpg') }})">
    <div class="container py-12">
        <div class="flex flex-wrap w-full text-white font-semibold text-xl">
           <div class="w-full lg:w-1/3 text-center ">
                <img class="w-1/2 mx-auto mb-4" src="{{ asset('images/logo-estado.svg') }}">
                <p>@lang('jalisco.foundation')</p>
                <p>16 de junio de 1823 (195 años)</p>
            </div>
            <div class="w-full lg:w-2/3 flex flex-wrap px-10 lg:px-0">
                <div class="w-full my-4">
                    <p>@lang('jalisco.coordinates'): 20°34′00″N 103°40′35″O</br>
                    @lang('jalisco.capital'): Guadalajara</br>
                    @lang('jalisco.entity'): @lang('jalisco.state')</p>
                </div>
                <div class="w-full lg:w-1/2 my-4">
                    <p>@lang('jalisco.surface'): Puesto 7.º de 32</br>
                        @lang('jalisco.total'): 78,588 km²</br>
                        @lang('jalisco.altitude')	 </br>
                        • @lang('jalisco.media')	1355 m s. n. m.</br>
                        • @lang('jalisco.maximum') 4 260 m s. n. m.</p>
                </div>
                <div class="w-full lg:w-1/2 my-4">
                    <p>@lang('jalisco.population') </br>
                    Puesto 4.º de 32</br>
                    • @lang('jalisco.total') :7 844 830 hab.2​</br>
                    • @lang('jalisco.density') : 102,1 hab/km² (13)</br>
                    @lang('jalisco.demonym')	Jalisciense</p>
                </div>
            </div>
       </div>
    </div>
</section>

<section class="jalisco-info bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-jalisco-info.jpg') }})">
    <div class="container py-12">
        <div class="flex flex-wrap w-full text-2xl text-gray-500 px-10 lg:px-0">
            <div class="w-full">
                @markdown($jalisco->info_top)
            </div>
            <div class="w-full lg:w-1/2">
                @markdown($jalisco->info_left)
            </div>
            <div class="w-full lg:w-5/12 ml-auto">
                <img class="shadow-2xl" src="{{ asset('images/info-jalisco-1.jpg') }}">
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 p-12">
            <img src="{{ asset('images/mapa_regiones.svg') }}">
        </div>
        <div class="w-full md:w-1/2 multiply bg-cover bg-no-repeat bg-center flex items-center" style="background-image:url({{ asset('images/region.jpg') }})">
            <div class="px-12 py-12 lg:py-0 lg:pl-24 lg:pr-40 text-white text-center">
                <div class="text-left">
                    <h3 class="font-secondary text-5xl"><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1 -ml-12 align-middle"></font-awesome-icon>Región Centro</h3>
                    <p class="text-xl">Si visitas Jalisco, muy probablemente pases por aquí al disfrutar de la capital, Guadalajara, o al caminar por los bellísimos andadores de Tlaquepaque. ¡Bienvenido! </p>
                </div>
                <a class="button px-8 py-2 shadow-7xl my-8 inline-block rounded-none" href="{{ route('regiones') }}">@lang('general.more-info')</a>
            </div>
        </div>
    </div>
</section>

@endsection