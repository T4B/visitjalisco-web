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
        <div class="slide multiply flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slide['image']) }})">
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
    </div>
</section>


@endsection