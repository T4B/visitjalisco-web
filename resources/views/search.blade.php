@extends('layouts.default')
@section('page-name', 'search')

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/bg-search.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0 text-content">
            <h2 class="text-6xl font-bold">@lang('search.title')</h2>
        </div>
   </div>
</section>

<section class="search">
    <div class="container pt-20 pb-4 px-10 lg:px-0">
        @component('components.search')
        @endcomponent
    </div>
</section>

<section class="seearch-result py-4">
    <div class="container">
        @foreach ($posts as $post )
        <div class="flex flex-wrap items-center my-24">
            <div class="w-full lg:w-5/12 bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $post->sizes['medium'] }})"></div>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-10">
                <h2 class="text-6xl font-bold text-gray-400 leading-none">{{ ${'post'}->{'title_' . $locale} }}</h2>
                {{--<p class="text-gray-400">{{ ${'post'}->{'subtitle_' . $locale} }}</p>--}}
                @markdown( ${'post'}->{'excerpt_' . $locale} )
                <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}" class="button px-8 py-2 shadow-7xl my-8 inline-block">Leer más</a>
            </div>
        </div>
        @endforeach
        <div class="flex flex-wrap items-center my-8">
            <div class="w-full lg:w-3/4 search-results-navigation">
                {{ $posts->links() }}
            </div>
            <div class="w-full lg:w-1/4 text-right my-6 lg:my-0">
                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', [ 'lang' => $locale ]) }}" class="button text-xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('search.back')</a>
            </div>
        </div>
        
    </div>
</section>

@endsection