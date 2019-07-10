@extends('layouts.default')
@section('page-name', 'jalisco')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-jalisco.jpg') }})">
    <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            {{--<h1 class="mx-auto text-4xl lg:text-6xl font-normal">Esto es <span class="font-bold">Jalisco</span></h1>--}}
            {{--<p>La palabra Jalisco, formada de las palabras náhuatl xalli, que significa arena, ixtli, que significa superficie y co, desinencia de lugar, significa “sobre el arenal” y sobre este, se han levantado siglos de historia, tradición, folclor, cultura, arte y mucho más.</p>--}}
            @markdown($jalisco->header_text)
        </div>
    </div>
</section>

<section class="history">
    <div class="container py-12">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-5/12 text-2xl text-gray-500 px-10 lg:px-0">
                {{--<p>Se especula que el territorio de Jalisco, antes de ser Jalisco, ha sido habitado desde hace 15,000 años. Se han encontrado vestigios de culturas Toltecas, primero y Chichimecas después. En 1530, tras la llegada de los españoles, se fundó la Guadalajara, que sería  capital del Reino de Nueva Galicia.  Ésta fue la ciudad en la que Miguel Hidalgo y Costilla promulgaría la abolición de la esclavitud durante la Guerra de Independencia.</p>
                <p>Fue hasta el 16 de junio de 1823, tras la caída del Imperio Mexicano, que se fundara el Estado Libre y Soberano de Xalisco (antes el sonido de la “J” se representaba con una “X”, como sigue ocurriendo en el nombre de “México”), manteniendo a Guadalajara como su capital y dando origen a una entidad que daría mucho de qué hablar.</p>--}}
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
                <p>Fundación</p>
                <p>16 de junio de 1823 (195 años)</p>
            </div>
            <div class="w-full lg:w-2/3 flex flex-wrap px-10 lg:px-0">
                <div class="w-full my-4">
                    <p>Coordenadas: 20°34′00″N 103°40′35″O</br>
                    Capital: Guadalajara</br>
                    Entidad: Estado</p>
                </div>
                <div class="w-full lg:w-1/2 my-4">
                    <p>Superficie: Puesto 7.º de 32</br>
                        Total: 78,588 km²</br>
                        Altitud	 </br>
                        • Media	1355 m s. n. m.</br>
                        • Máxima 4 260 m s. n. m.</p>
                </div>
                <div class="w-full lg:w-1/2 my-4">
                    <p>Población </br>
                    Puesto 4.º de 32</br>
                    • Total :7 844 830 hab.2​</br>
                    • Densidad : 102,1 hab/km² (13)</br>
                    Gentilicio	Jalisciense</p>
                </div>
            </div>
       </div>
    </div>
</section>

<section class="jalisco-info bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/bg-jalisco-info.jpg') }})">
    <div class="container py-12">
        <div class="flex flex-wrap w-full text-2xl text-gray-500 px-10 lg:px-0">
            <div class="w-full">
                {{--<h1 class="font-normal text-6xl leading-tight font-secondary mb-8">¡Mucho gusto, </br>
                    <span class="font-bold">Jalisco!</span></h1>
                <p>Jalisco está conformado por 125 municipios, ocho de los cuales cuentan con el distintivo de Pueblo Mágico. Posiblemente has escuchado hablar de Zapopan, Puerto Vallarta o Tlaquepaque, y cada uno de ellos cuenta con algún atractivo especial, como son Tapalpa o Mascota, y ya sea que pruebes las guasanas de Mazamitla, o admires los paisajes de Agave Azul en Tequila, aquí se viven experiencias que en ningún otro lado se viven igual.</p>
                <p>Hoy en día Jalisco se distingue por la gran diversidad que envuelve a su geografía.  Tanto en términos de clima, pudiendo pasar de la cálida playa al fresco bosque en unas horas de camino, como en la posibilidad visitar una ciudad a la altura de las grandes urbes, o perderse en callejones llenos de artesanías y tradición, todo a una distancia mínima. </p>--}}
                @markdown($jalisco->info_top)
            </div>
            <div class="w-full lg:w-1/2">
                {{--<p>Así mismo, Jalisco es un estado representativo en diferentes ámbitos: económicamente realiza grandes aportes por su producción de distintos productos agrícolas, al mismo tiempo que es sede de diferentes empresas de tecnología y cuenta con excelentes espacios para foros y convenciones; en términos culturales, varios de los elementos icónicos de México, como lo son el tequila o el mariachi, tienen su hogar y origen en nuestras latitudes. </p>
                <p>La cocina del estado cuenta con distintivos como el birote salado, el queso adobera o la carne en su jugo y el entretenimiento y la diversión no se quedan atrás gracias a los múltiples foros y espacios dedicados al esparcimiento con los que contamos.</p>
                <p>Jalisco es un estado lleno de los más agradables contrastes, diverso en su gente y abierto a todas las personas que lo quieran visitar. Descubre por tu propia cuenta dónde está la magia de Jalisco, visítalo y hazlo tuyo.   </p>--}}
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
            <img src="{{ asset('images/map.jpg') }}">
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