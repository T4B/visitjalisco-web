@extends('layouts.default')
@section('page-name', 'routes')

@section('content')

<section class="headerimage bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/routes/bg-routes-main.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold">Rutas</h2>
            <p class="font-secondary text-lg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
        </div>
   </div>
</section>

<section class="routes">
    <div class="flex flex-wrap w-full">
        @foreach ($routes as $route)
        <div class="w-full lg:w-1/2 bg-gray-100">
            <div class="route-image w-full bg-cover bg-no-repeat bg-center p-32" style="background-image:url({{ $route->main }})">
            </div>
            <div class="px-10 lg:px-20 py-10 relative mt-6 mb-8">
                <div class="text-content text-lg mb-6">
                    <h2 class="text-5xl lg:text-6xl font-bold text-{{ $route->color }}">{{ $route->name_es }}</h2>
                    @markdown( $route->short_description_es )
                </div>   
                <a href="{{ route('route', ['slug' => $route->slug ]) }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md">Leer más</a>
                @if ($loop->even)
                    <hr class="hidden lg:block absolute rounded bg-gray-200 top-0 w-1 left-0 h-full">
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection