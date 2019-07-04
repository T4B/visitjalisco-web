@extends('layouts.default')

@section('content')

<section class="coming-soon multiply bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset('images/back_proximamente.jpg') }})">
    <div class="container text-content flex w-full items-center">
        <div class="flex-1 font-secondary text-center">
            <h1 class="text-white mx-auto  text-4xl md:text-6xl lg:text-12xl font-bold mb-12"> @lang('general.coming-soon') </h1>
            <a class=" text-xl lg:text-2xl font-bold mx-auto bg-red text-white px-8 py-2 rounded-lg shadow-md" href="{{ route('home') }}"> @lang('general.go-back') </a>
        </div>
    </div>
</section>



@endsection