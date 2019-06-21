@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

@if($sliders->count())
<slider class="main-slider">
    @foreach($sliders->sortBy('order') as $slider)
    <slide>
        <div class="slide h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slider->url) }})">
            <div class="container py-32 text-white">
                @markdown( $slider->text )
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
                    <h1 class="text-5xl">Este es </br><span class="font-bold">Mi Jalisco</span></h1>
                    <p class="text-2xl py-8">Estas son las historias y </br>experiencias que nuestras</br> regiones ofrecen,</br>
                        <span class="font-bold">Vividas a profundidad.</span></p>
                </div>
            </div>
            <div class="w-full md:w-7/12 ml-auto">
                <slider class="shadow-2xl">
                    <slide>
                        <div class="py-56 px-20  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/slider/slider-01.jpg') }})">
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
        <div class="category w-1/2 lg:w-1/5 bg-red" style="background-image:url({{ asset('images/categories/experiencias.jpg') }})">
            <h2 class="text-2xl">Experiencias</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-gray" style="background-image:url({{ asset('images/categories/cultura.jpg') }})">
            <h2 class="text-2xl">Cultura</h2>
        </div>
         <div class="category w-1/2 lg:w-1/5 " style="background-image:url({{ asset('images/categories/deportivo.jpg') }})">
            <h2 class="text-2xl">Deportivo</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-orange">
            <h2 class="text-2xl">Gastronómico</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-gray" style="background-image:url({{ asset('images/categories/lgbt.jpg') }})">
            <h2 class="text-2xl">LGBTTTIQ</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-gray" style="background-image:url({{ asset('images/categories/naturaleza.jpg') }})">
            <h2 class="text-2xl">Naturaleza</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-orange">
            <h2 class="text-2xl">Negocio y reuniones</h2>
        </div>
         <div class="category w-1/2 lg:w-1/5 bg-gray" style="background-image:url({{ asset('images/categories/religioso.jpg') }})">
            <h2 class="text-2xl">Religioso</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-gray" style="background-image:url({{ asset('images/categories/salud.jpg') }})">
            <h2 class="text-2xl">Salud y Bienestar</h2>
        </div>
        <div class="category w-1/2 lg:w-1/5 bg-purple ">
            <h2 class="text-2xl">Sol y Playa</h2>
        </div>
    </div>
</section>

<section class="events bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-eventos.jpg') }})">
    <div class="container py-16">
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/coordenada.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2>Coordenada 2019</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Parque Trasloma. GDL</p>
                <p>8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/gdlluz.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2>GDLUZ</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Parque Trasloma. GDL</p>
                <p>8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-20 -mt-4 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/openvallarta.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2>Open Vallarta</h2>
                <p><font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-red mr-1"></font-awesome-icon>Parque Trasloma. GDL</p>
                <p>8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex w-full">
            <a class="font-secondary text-2xl font-bold ml-auto bg-red text-white px-8 py-2 rounded-lg shadow-md" href="">Más eventos</a>
        </div>
    </div>
</section>

<section class="routes bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-routes.jpg') }})">
    <div class="container py-10 px-10 lg:px-0">
        <div class="w-full bg-white p-10 rounded-lg">
            <img class="w-full" src="{{ asset('images/routes/ruta-historica.jpg') }}">
            <div class="px-4 text-sm">
                <h2 class="font-secondary font-bold text-3xl my-2">Ruta de las catedrales</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac massa pellentesque tortor tristique varius. Praesent eu felis sit amet magna pellentesque rhoncus. Nulla sem mauris, posuere in dapibus vel, pretium aliquam ligula. Nunc fermentum ligula sed quam molestie, tempor suscipit lectus sodales. Integer sit amet risus nibh. Proin ac metus nisi. Integer aliquet quam vitae mi volutpat, in convallis orci euismod. Cras aliquet sem a mollis pretium.</p>
            </div>
        </div>

        <div class="py-6">
            <div class="flex flex-wrap -mx-2">
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta de los bosques</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta histórica</h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 mb-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-secondary font-bold text-3xl my-2 leading-none">Ruta del arte</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full py-4">
            <a class="font-serif text-3xl ml-auto text-white" href="">Más rutas</a>
        </div>
    </div>
</section>

@endsection