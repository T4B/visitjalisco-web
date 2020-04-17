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
        @if (empty($slide['link']))
        <div class="slide multiply-40 flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slide['image']) }})">
            <div class="container text-white px-8 py-20 md:py-40">
                @markdown( $slide['text'] )
            </div>
        </div>
        @else
            <a href="{{ $slide['link'] }}">
                <div class="slide multiply-40 flex h-screen bg-cover bg-no-repeat bg-center" style="background-image:url({{ asset($slide['image']) }})">
                    <div class="container text-white px-8 py-20 md:py-40">
                        @markdown( $slide['text'] )
                    </div>
                </div>
            </a>
        @endif
    </slide>
    @endforeach
</slider>
@endif

<section class="articles py-16">
    <div class="container">
        <div class="w-full text-grey-100 px-6 lg:px-0">
            <h2 class="font-bold text-11xl text-gray-400">{{ ${'experience'}->{'name_' . $locale} }}</h2>
            @markdown ( ${'experience'}->{'description_' . $locale} )
        </div>
        @foreach ($posts as $post )
        <div class="flex flex-wrap items-center my-24">
            <a class="w-full lg:w-5/12" href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $post->sizes['medium'] }})"></div></a>
            <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-6 lg:px-10">
                <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}"><h2 class="text-6xl font-bold text-gray-400 leading-none">{{ ${'post'}->{'title_' . $locale} }}</h2></a>
                {{--<p class="text-gray-400">{{ ${'post'}->{'subtitle_' . $locale} }}</p>--}}
                <div class="tags mb-4">
                    @foreach ($post->experiences as $category)
                        <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $category->slug ] ) : route('localized.experiences.category', ['category' => $category->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'category'}->{'name_' . $locale} }}</a>
                    @endforeach
                    @foreach ($post->regions as $region)
                        <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug ]) : route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'region'}->{'name_' . $locale} }}</a>
                    @endforeach
                </div>
                @markdown( ${'post'}->{'excerpt_' . $locale} )
                <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}" class="button px-8 py-2 shadow-7xl my-8 inline-block">Leer más</a>
            </div>
        </div>
        @endforeach
        <div class="flex flex-wrap items-center my-8">
            <div class="w-full lg:w-3/4 articles-navigation">
                {{ $posts->links() }}
            </div>
            <div class="w-full lg:w-1/4 text-right my-6 lg:my-0">
                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', [ 'lang' => $locale ]) }}" class="button text-xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('experiences.all')</a>
            </div>
        </div>
        
    </div>
</section>


@endsection