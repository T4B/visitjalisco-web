@extends('layouts.default')
@section('header-style', '')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<slider>
    <slide>
        <div class="h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/slider/slider-01.jpg') }})"></div>
    </slide>
</slider>

<section class="regions">
    <div class="container py-10">
        <div class="flex flex-wrap text-black">
            <div class="w-1/3">
                <h1 class="text-6xl leading-none lg:leading-tight">Este es </br><strong>Mi Jalisco</strong></h1>
                <p class="text-2xl">Estas son las historias y </br>experiencias que nuestras</br> regiones ofrecen,</br>
                    <strong>Vividas a profundidad.</strong></p>
            </div>
            <div class="w-7/12 ml-auto">
                <slider class="shadow-2xl">
                    <slide>
                        <div class="p-56 bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/slider/slider-01.jpg') }})"></div>
                    </slide>
                </slider>
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <div class="flex flex-wrap text-white text-center">
        <div class="category w-1/5 bg-red bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/experiencias.jpg') }})">
            <h2>Experiencias</h2>
        </div>
        <div class="category w-1/5 bg-gray bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/cultura.jpg') }})">
            <h2>Cultura</h2>
        </div>
         <div class="category w-1/5 bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/deportivo.jpg') }})">
            <h2>Deportivo</h2>
        </div>
        <div class="category w-1/5 bg-orange ">
            <h2>Gastronómico</h2>
        </div>
        <div class="category w-1/5 bg-gray bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/lgbt.jpg') }})">
            <h2>LGBTTTIQ</h2>
        </div>
        <div class="category w-1/5 bg-gray bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/naturaleza.jpg') }})">
            <h2>Naturaleza</h2>
        </div>
        <div class="category w-1/5 bg-orange ">
            <h2>Negocio y reuniones</h2>
        </div>
         <div class="category w-1/5 bg-gray bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/religioso.jpg') }})">
            <h2>Religioso</h2>
        </div>
        <div class="category w-1/5 bg-gray bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/categories/salud.jpg') }})">
            <h2>Salud y Bienestar</h2>
        </div>
        <div class="category w-1/5 bg-purple ">
            <h2>Sol y Playa</h2>
        </div>
    </div>
</section>

<section class="events bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-eventos.jpg') }})">
    <div class="container py-10">
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-16 -mt-2 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/coordenada.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-2xl">Coordenada 2019</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-16 -mt-2 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/gdlluz.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-2xl">GDLUZ</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2 bg-white">
                <div class="bg-cover bg-no-repeat bg-center p-16 -mt-2 -ml-4 shadow-md" style="background-image:url({{ asset('images/events/openvallarta.jpg') }})"></div>
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-2xl">Open Vallarta</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex w-full">
            <a class="ml-auto bg-red text-white px-8 py-2 rounded-lg shadow-md" href="">Más eventos</a>
        </div>
    </div>
</section>

<section class="routes bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-routes.jpg') }})">
    <div class="container py-10">
        <div class="w-full bg-white p-10 rounded-lg">
            <img class="w-full" src="{{ asset('images/routes/ruta-historica.jpg') }}">
            <div class="px-4">
                <h2 class="font-bold text-2xl my-2">Ruta de las catedrales</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac massa pellentesque tortor tristique varius. Praesent eu felis sit amet magna pellentesque rhoncus. Nulla sem mauris, posuere in dapibus vel, pretium aliquam ligula. Nunc fermentum ligula sed quam molestie, tempor suscipit lectus sodales. Integer sit amet risus nibh. Proin ac metus nisi. Integer aliquet quam vitae mi volutpat, in convallis orci euismod. Cras aliquet sem a mollis pretium.</p>
            </div>
        </div>

        <div class="py-6">
            <div class="flex -mx-2">
                <div class="w-1/3 px-2">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 my-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-bold text-2xl my-2 leading-none">Ruta de los bosques</h2>
                    </div>
                </div>
                <div class="w-1/3 px-2">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 my-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-bold text-2xl my-2 leading-none">Ruta histórica</h2>
                    </div>
                </div>
                <div class="w-1/3 px-2">
                    <div class="bg-white p-4 rounded-lg text-center">
                        <div class="bg-cover bg-no-repeat bg-center p-32 my-6" style="background-image:url({{ asset('images/routes/ruta-historica.jpg') }})"></div>
                        <h2 class="font-bold text-2xl my-2 leading-none">Ruta del arte</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection