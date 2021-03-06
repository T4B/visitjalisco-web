@extends('layouts.default')
@section('page-name', 'search')

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/bg-search.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-6 lg:px-0 text-content">
            <h2 class="text-6xl font-bold">@lang('search.title')</h2>
        </div>
   </div>
</section>

<section class="search">
    <div class="container pt-20 pb-4">
        @component('components.search')
        @endcomponent
    </div>
</section>

<section class="seearch-result py-4">
    <div class="container">
        @foreach ($results as $result )
        <div class="flex flex-wrap items-center my-24 px-0">
            @switch (get_class($result))
            @case ("App\Post")
                <a class="w-full lg:w-5/12 " href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $result->slug_es ]) : route('localized.blog.post', ['slug' => $result->slug_es, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $result->sizes['medium'] }})"></div></a>
                <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-0 lg:px-10">
                    <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $result->slug_es ]) : route('localized.blog.post', ['slug' => $result->slug_es, 'lang' => $locale ]) }}"><h2 class="text-5xl lg:text-6xl font-bold text-gray-400 leading-none pt-8 lg:pt-0">{{ ${'result'}->{'title_' . $locale} }}</h2></a>
                    <div class="tags mb-4">
                        @foreach ($result->experiences as $category)
                            <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $category->slug ] ) : route('localized.experiences.category', ['category' => $category->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'category'}->{'name_' . $locale} }}</a>
                        @endforeach
                        @foreach ($result->regions as $region)
                            <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug ]) : route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'region'}->{'name_' . $locale} }}</a>
                        @endforeach
                    </div>
                    @markdown( ${'result'}->{'excerpt_' . $locale} )
                    <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $result->slug_es ]) : route('localized.blog.post', ['slug' => $result->slug_es, 'lang' => $locale ]) }}" class="button px-10 py-1 shadow-7xl my-8 inline-block">Leer más</a>   
                </div>
            @break
            @case ("App\Experience")
                <a class="w-full lg:w-5/12" href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $result->slug ] ) : route('localized.blog.post', ['category' => $result->slug, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $result->url }})"></div></a>
                <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-0 lg:px-10">
                    <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $result->slug ] ) : route('localized.blog.post', ['category' => $result->slug, 'lang' => $locale ]) }}"><h2 class="text-5xl lg:text-6xl font-bold text-gray-400 leading-none  pt-8 lg:pt-0">{{ ${'result'}->{'name_' . $locale} }}</h2></a>
                    @markdown( \Str::words ( ${'result'}->{'description_' . $locale} , 30 ) )
                    <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $result->slug ] ) : route('localized.blog.post', ['category' => $result->slug, 'lang' => $locale ]) }}" class="button px-10 py-1 shadow-7xl my-8 inline-block">Leer más</a>   
                </div>
            @break
            @case ("App\Region")
                <a class="w-full lg:w-5/12" href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $result->slug ]) : route('localized.region', ['slug' => $result->slug, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $result->main }})"></div></a>
                <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-0 lg:px-10">
                    <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $result->slug ]) : route('localized.region', ['slug' => $result->slug, 'lang' => $locale ]) }}"><h2 class="text-5xl lg:text-6xl font-bold text-gray-400 leading-none  pt-8 lg:pt-0">{{ ${'result'}->{'name_' . $locale} }}</h2></a>
                    @markdown( ${'result'}->{'short_description_' . $locale} )
                    <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $result->slug ]) : route('localized.region', ['slug' => $result->slug, 'lang' => $locale ]) }}" class="button px-10 py-1 shadow-7xl my-8 inline-block">Leer más</a>   
                </div>
            @break
            @case ("App\Route")
                <a class="w-full lg:w-5/12" href="{{ $locale == config('app.fallback_locale') ? route('route', ['slug' => $result->slug ]) : route('localized.route', ['slug' => $result->slug, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $result->main }})"></div></a>
                <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-0 lg:px-10  pt-8 lg:pt-0">
                    <a href="{{ $locale == config('app.fallback_locale') ? route('route', ['slug' => $result->slug ]) : route('localized.route', ['slug' => $result->slug, 'lang' => $locale ]) }}"><h2 class="text-5xl lg:text-6xl font-bold text-gray-400 leading-none">{{ ${'result'}->{'name_' . $locale} }}</h2></a>
                    @markdown( ${'result'}->{'short_description_' . $locale} )
                    <a href="{{ $locale == config('app.fallback_locale') ? route('route', ['slug' => $result->slug ]) : route('localized.route', ['slug' => $result->slug, 'lang' => $locale ]) }}" class="button px-10 py-1 shadow-7xl my-8 inline-block">Leer más</a>   
                </div>
            @break
            @endswitch
        </div>
        @endforeach
        <div class="flex flex-wrap items-center my-8">
            <div class="w-full lg:w-3/4 search-results-navigation">
                {{ $results->links() }}
            </div>
            <div class="w-full lg:w-1/4 text-right my-6 lg:my-0">
                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', [ 'lang' => $locale ]) }}" class="button text-xl font-bold mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('search.back')</a>
            </div>
        </div>
        
    </div>
</section>

@endsection