@extends('layouts.default')
@section('page-name', 'destination')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $destination->url }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold leading-none">{{ ${'destination'}->{'name_' . $locale} }}</h2>
            @markdown( ${'destination'}->{'subtitle_' . $locale} )
        </div>
   </div>
</section>


<section class="destination">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full px-10 lg:px-0 text-content">
                @markdown( ${'destination'}->{'description_' . $locale} )
            </div>
        </div>
    </div>
</section>


<section class="social">
    <div class="container">
        <div class="w-full my-12 flex flex-wrap px-10 lg:px-0">
            @component('components.share', [
                'title' => ${'destination'}->{'name_' . $locale}, 
                'href' => route('experiences.destination', ['category' => $destination->experience->slug, 'destination' => $destination->slug ])])
            @endcomponent
            <div class="w-full lg:w-1/2 text-right my-6 lg:my-0">
                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', [ 'lang' => $locale ]) }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('experiences.all')</a>
            </div>
        </div>
        
    </div>
    
</section>

@component('components.posts-slider', ['posts' =>$posts])
@endcomponent

@endsection