@extends('layouts.default')
@section('page-name', 'region')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/bg-turismo-reuniones.jpg') }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-7xl inline-block">Turismo de reuniones</h2>
        </div>
   </div>
</section>

<section class="info">
    <div class="container px-10 py-10 lg:px-0 text-2xl text-gray-500">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quas. Quas voluptatum praesentium delectus cumque, laborum consectetur voluptatibus deserunt rem, veritatis aliquam aliquid reiciendis consequatur atque amet. Placeat, beatae quos!</p>
    </div>
</section>


<section class="gallery bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-convention-centers.jpg') }})">
    <div class="container py-12">
        
    </div>
</section>

<section class="convention-centers">
    <div class="container px-10 py-10 lg:px-0">
        <div class="text-center text-gray-400 font-secondary font-bold leading-none my-4">
            <h2 class="text-6xl">¿Quieres hacer un evento en Jalisco?</h2>
            <p class="text-5xl">Podemos ayudarte</p>
        </div>
    </div>
    <div class="w-full relative mb-12">
        <hr class="hidden lg:block line absolute bg-red-400 h-1 w-2/3 bottom-0 right-0">
    </div>
    <div class="container">
        <div class="flex flex-wrap items-center my-12">
            <div class="w-full lg:w-1/3">
                <img src="{{ asset('images/logo-expo.jpg') }}">
            </div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl">
                <h2 class="text-6xl font-bold text-gray-400">Expoguadalajara</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error vitae dolores magnam consequatur, rerum necessitatibus aspernatur ab beatae nemo suscipit! Sit delectus reiciendis dolor voluptas sapiente dolores odit aut! Ex.</p>
                <p class="text-gray-400"><font-awesome-icon :icon="['far', 'envelope']" fixed-width class="text-red-400 mr-1 align-middle"></font-awesome-icon>Lorem ipsum dolor sit </p>
                <p class="text-gray-400"><font-awesome-icon :icon="['fas', 'phone']" fixed-width class="text-red-400 mr-1 align-middle fa-flip-horizontal"></font-awesome-icon>Lorem ipsum dolor sit </p>
            </div>
        </div>
        <div class="flex flex-wrap items-center my-12">
            <div class="w-full lg:w-1/3">
                <img src="{{ asset('images/logo-expo.jpg') }}">
            </div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl">
                <h2 class="text-6xl font-bold text-gray-400">Expoguadalajara</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error vitae dolores magnam consequatur, rerum necessitatibus aspernatur ab beatae nemo suscipit! Sit delectus reiciendis dolor voluptas sapiente dolores odit aut! Ex.</p>
                <p class="text-gray-400"><font-awesome-icon :icon="['far', 'envelope']" fixed-width class="text-red-400 mr-1 align-middle"></font-awesome-icon>Lorem ipsum dolor sit </p>
                <p class="text-gray-400"><font-awesome-icon :icon="['fas', 'phone']" fixed-width class="text-red-400 mr-1 align-middle fa-flip-horizontal"></font-awesome-icon>Lorem ipsum dolor sit </p>
            </div>
        </div>
        <div class="flex flex-wrap items-center my-12">
            <div class="w-full lg:w-1/3">
                <img src="{{ asset('images/logo-expo.jpg') }}">
            </div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl">
                <h2 class="text-6xl font-bold text-gray-400">Expoguadalajara</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error vitae dolores magnam consequatur, rerum necessitatibus aspernatur ab beatae nemo suscipit! Sit delectus reiciendis dolor voluptas sapiente dolores odit aut! Ex.</p>
                <p class="text-gray-400"><font-awesome-icon :icon="['far', 'envelope']" fixed-width class="text-red-400 mr-1 align-middle"></font-awesome-icon>Lorem ipsum dolor sit </p>
                <p class="text-gray-400"><font-awesome-icon :icon="['fas', 'phone']" fixed-width class="text-red-400 mr-1 align-middle fa-flip-horizontal"></font-awesome-icon>Lorem ipsum dolor sit </p>
            </div>
        </div>
        <div class="flex flex-wrap items-center my-12">
            <div class="w-full lg:w-1/3">
                <img src="{{ asset('images/logo-expo.jpg') }}">
            </div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl">
                <h2  class="text-6xl font-bold text-gray-400">Expoguadalajara</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error vitae dolores magnam consequatur, rerum necessitatibus aspernatur ab beatae nemo suscipit! Sit delectus reiciendis dolor voluptas sapiente dolores odit aut! Ex.</p>
                <p class="text-gray-400"><font-awesome-icon :icon="['far', 'envelope']" fixed-width class="text-red-400 mr-1 align-middle"></font-awesome-icon>Lorem ipsum dolor sit </p>
                <p class="text-gray-400"><font-awesome-icon :icon="['fas', 'phone']" fixed-width class="text-red-400 mr-1 align-middle fa-flip-horizontal"></font-awesome-icon>Lorem ipsum dolor sit </p>
            </div>
        </div>
    </div>
</section>

@endsection