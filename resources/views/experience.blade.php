@extends('layouts.default')
@section('page-name', 'experience')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

@if(count($experience->gallery()))
<slider class="main-slider">
    @foreach($experience->gallery() as $slide)
    <slide>
        <div class="slide multiply-40 flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slide['image']) }})">
            <div class="container text-white px-8 py-20 md:py-40">
                @markdown( $slide['text'] )
            </div>
        </div>
    </slide>
    @endforeach
</slider>
@endif

<section class="destinations py-16">
    <div class="container">
        <div class="w-full text-grey">
            <h2 class="font-bold text-11xl text-gray-400">{{ $experience->name_es }}</h2>
            @markdown ($experience->description_es )
        </div>
        @foreach ($destinations as $destination )
        <div class="flex flex-wrap items-center my-24">
            <div class="w-full lg:w-5/12 bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $destination->url }})"></div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-10">
                <h2 class="text-6xl font-bold text-gray-400">{{ $destination->name_es }}</h2>
                <p class="text-gray-400">{{ $destination->subtitle_es }}</p>
                @markdown( $destination->short_description_es )
                <a href="{{ route('experiences.destination', ['category' => $experience->slug, 'slug' => $destination->slug ]) }}" class="button px-8 py-2 shadow-7xl my-8 inline-block">Leer más</a>
            </div>
        </div>
        @endforeach
        <div class="flex flex-wrap items-center my-8">
            <div class="w-full lg:w-3/4 destinations-navigation">
                {{ $destinations->links() }}
            </div>
            <div class="w-full lg:w-1/4 text-right my-6 lg:my-0">
                <a href="{{ route('experiences') }}" class="button text-xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">Todas las experiencias</a>
            </div>
        </div>
        
    </div>
</section>


@endsection