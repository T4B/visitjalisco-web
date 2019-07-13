@extends('layouts.default')
@section('page-name', 'mi-jalisco')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco.jpg') }})">
   
</section>

<section class="bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco-2.jpg') }})">
    <div class="container px-10 py-10 lg:px-0">
        <div class="w-full">
            <h2 class="font-serif text-gray-500 text-8xl mb-8">Este es <span class="font-bold">Mi Jalisco</span></h2>
        </div>
    </div>
    <mi-jalisco-videos :videos='@json($videos)'></mi-jalisco-videos>
</section>

{{--<section class="bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-mi-jalisco-2.jpg') }})">
    <div class="container px-10 py-10 lg:px-0">
        <div class="w-full">
            <h2 class="font-serif text-gray-500 text-8xl mb-8">Este es <span class="font-bold">Mi Jalisco</span></h2>
            <div class="py-64 bg-cover bg-no-repeat bg-center w-5/6 mx-auto shadow-7xl mb-8" style="background-image:url({{ asset('images/mi-jalisco-video.jpg') }})">
            </div>
            <div class="py-8 text-gray-400 text-2xl leading-tight">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            </div>
        </div>
        <div class="w-full">
            <ul class="w-full lg:w-auto flex justify-start text-2xl">
                <li class="mr-3 lg:mx-1">
                    <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="#" target="_blank" rel="noopener">
                        <font-awesome-icon :icon="['fas', 'plus-square']" fixed-width></font-awesome-icon>
                    </a>
                </li>
                <li class="mr-3 lg:mx-1">
                    <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener">
                        <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
                    </a>
                </li>
                <li class="mr-3 lg:mx-1">
                    <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener">
                        <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
                    </a>
                </li>
                <li class="lg:mr-0 lg:mx-1">
                    <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.pinterest.com" target="_blank" rel="noopener">
                        <font-awesome-icon :icon="['fab', 'pinterest']" fixed-width></font-awesome-icon>
                    </a>
                </li>
                <li class="lg:mx-1">
                    <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="mailto:example@example.com" target="_blank" rel="noopener">
                        <font-awesome-icon :icon="['far', 'envelope']" fixed-width></font-awesome-icon>
                    </a>
                </li>
            </ul>
            <hr class="h-1 bg-gray-400 opacity-25 my-10">
        </div>
        <div class="w-full px-10">
            <slider class="shadow-2xl" :slides="3" :space="30">
                <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/mi_jalisco_home.jpg') }})">
                        <div class="text-white absolute bottom-8 font-serif">
                            <h2 class="font-bold text-xl">Tapalpa</h2>
                            <p>La paz e inspiración del bosque</p>
                        </div>
                    </div>
                </slide>
                <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/mi_jalisco_home.jpg') }})">
                        <div class="text-white absolute bottom-8 font-serif">
                            <h2 class="font-bold text-xl">Tapalpa</h2>
                            <p>La paz e inspiración del bosque</p>
                        </div>
                    </div>
                </slide>
                <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ asset('images/mi_jalisco_home.jpg') }})">
                        <div class="text-white absolute bottom-8 font-serif">
                            <h2 class="font-bold text-xl">Tapalpa</h2>
                            <p>La paz e inspiración del bosque</p>
                        </div>
                    </div>
                </slide>
            </slider>
        </div>
    </div>
</section>--}}



@endsection