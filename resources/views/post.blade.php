@extends('layouts.default')
@section('page-name', 'post')
@section('og.image', $post->sizes['og'] ?? asset('/images/og.jpg'))

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')
<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $post->url }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold leading-none">{{ ${'post'}->{'title_' . $locale} }}</h2>
        </div>
   </div>
</section>


<section class="post-content">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full text-2xl text-gray-500 px-10 lg:px-0 text-content">
                @markdown( ${'post'}->{'text_' . $locale} )
            </div>
        </div>
    </div>
</section>


<section class="social">
    <div class="container">
        <div class="w-full my-12 flex flex-wrap px-10 lg:px-0">
            @component('components.share', [
                'title' => ${'post'}->{'title_' . $locale}, 
                'href' => route('blog.post', ['slug' => ${'post'}->{'slug_' . $locale} ])])
            @endcomponent
            <div class="w-full lg:w-1/2 text-right my-6 lg:my-0">
                <a href="{{ route('experiences') }}" class="button text-xl lg:text-2xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('experiences.all')</a>
            </div>
        </div>
        
    </div>
    
</section>

@component('components.posts-slider', ['posts' =>$posts])
@endcomponent

@endsection