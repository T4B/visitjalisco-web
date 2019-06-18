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
            <div class="w-2/3">
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <div class="flex flex-wrap text-white text-center">
        <div class="category w-1/5 bg-red">
            <h2>Experiencias</h2>
        </div>
        <div class="category w-1/5 bg-gray ">
            <h2>Cultura</h2>
        </div>
         <div class="category w-1/5 bg-gray ">
            <h2>Deportivo</h2>
        </div>
        <div class="category w-1/5 bg-orange ">
            <h2>Gastronómico</h2>
        </div>
        <div class="category w-1/5 bg-gray ">
            <h2>LGBTTTIQ</h2>
        </div>
        <div class="category w-1/5 bg-gray ">
            <h2>Naturaleza</h2>
        </div>
        <div class="category w-1/5 bg-orange ">
            <h2>Negocio y reuniones</h2>
        </div>
         <div class="category w-1/5 bg-gray ">
            <h2>Religioso</h2>
        </div>
        <div class="category w-1/5 bg-gray ">
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
            <div class="w-1/2">
            
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-xl">Coordenada 2019</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2">
            
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-xl">Coordenada 2019</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
        <div class="flex flex-wrap mb-8">
            <div class="w-1/2">
            
            </div>
            <div class="w-1/2 bg-white p-8">
                <h2 class="font-bold text-xl">Coordenada 2019</h2>
                <p class="text-sm">Parque Trasloma. GDL</p>
                <p class="text-sm">8 y 19 de Octubre, 2019</p>
            </div>
        </div>
    </div>
</section>

<section class="routes">
</section>

@endsection