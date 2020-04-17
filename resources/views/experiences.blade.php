@extends('layouts.default')
@section('page-name', 'experiences')

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/experiences/bg-experiences-main.jpg') }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-6 lg:px-0 text-content">
            <h2 class="text-6xl font-bold">@lang('experiences.title')</h2>
            <p class="font-secondary text-lg">@lang('experiences.subtitle')</p>
        </div>
   </div>
</section>

<section class="search">
    <div class="container pt-20 pb-12 px-6 lg:px-0">
        @component('components.search')
        @endcomponent
    </div>
</section>

@if ( $highlighted_posts->count() )
<section class="blog">
    <div class="container px-6 lg:px-0">
        <div class="w-full bg-gray-300 p-10">
            <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', [ 'slug' => $first_post->slug_es ]) : route('localized.blog.post', [ 'slug' => $first_post->slug_es, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-36 lg:p-48" style="background-image:url({{ $first_post->sizes['medium'] }})"></div></a>
            <div class="text-lg text-white">
                <div class="post-heading flex items-center">
                    <a class="inline-block" href="{{ $locale == config('app.fallback_locale') ? route('blog.post', [ 'slug' => $first_post->slug_es ]) : route('localized.blog.post', [ 'slug' => $first_post->slug_es, 'lang' => $locale ]) }}"><h2 class="font-secondary font-bold text-4xl my-2 text-gray-500">{{ ${'first_post'}->{'title_' . $locale} }}</h2></a>
                    <div class="tags inline-block ml-8">
                        @foreach ($first_post->experiences as $category)
                            <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $category->slug ] ) : route('localized.blog.post', ['category' => $category->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'category'}->{'name_' . $locale} }}</a>
                        @endforeach
                        @foreach ($first_post->regions as $region)
                            <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug ]) : route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'region'}->{'name_' . $locale} }}</a>
                        @endforeach
                    </div>
                </div>
                @markdown( ${'first_post'}->{'excerpt_' . $locale} )
            </div>
        </div>
            
        <div class="py-16">
            <div class="flex flex-wrap -mx-2">
                @foreach ($highlighted_posts as $post)
                    @if ($loop->first) @continue @endif
                <div class="w-full md:w-1/2 md:mt-4 xl:mt-0 xl:w-1/3 px-2 py-8 lg:py-0">
                    <div class="post bg-gray-300 p-4 text-left text-white text-lg relative">
                        <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', [ 'slug' => $post->slug_es ]) : route('localized.blog.post', [ 'slug' => $post->slug_es, 'lang' => $locale ]) }}"><div class="bg-cover bg-no-repeat bg-center p-36 mb-6" style="background-image:url({{ $post->sizes['thumb'] }})"></div></a>
                        <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', [ 'slug' => $post->slug_es ]) : route('localized.blog.post', [ 'slug' => $post->slug_es, 'lang' => $locale ]) }}"><h2 class="font-secondary font-bold text-2xl my-2 leading-none text-gray-500">{{ ${'post'}->{'title_' . $locale} }}</h2></a>
                        @markdown( \Str::words(${'post'}->{'excerpt_' . $locale}, 17) )
                        <div class="tags absolute bottom-4">
                            @foreach ($post->experiences as $category)
                                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $category->slug ] ) : route('localized.experiences.category', ['category' => $category->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'category'}->{'name_' . $locale} }}</a>
                            @endforeach
                            @foreach ($post->regions as $region)
                                <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug ]) : route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}" class="tag">{{ ${'region'}->{'name_' . $locale} }}</a>
                            @endforeach
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<section class="categories font-secondary leading-tight">
    <div class="flex flex-wrap text-white text-center font-bold">
        @foreach ($experiences as $experience)
            @if ($loop->index == 0 || $loop->index == 5 )
                <a class="category w-full lg:w-3/7" href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $experience->slug ]) : route('localized.experiences.category', ['category' => $experience->slug, 'lang' => $locale ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @elseif ($loop->index > 0 && $loop->index < 5)
                <a class="category w-full lg:w-2/7" href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $experience->slug ]) : route('localized.experiences.category', ['category' => $experience->slug, 'lang' => $locale ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @else
                <a class="category w-full lg:w-1/3" href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $experience->slug ]) : route('localized.experiences.category', ['category' => $experience->slug, 'lang' => $locale ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @endif
                    <h2 class="{{ (empty($experience->grid_styles)) ? 'text-2xl' : $experience->grid_styles }} {{ $experience->text_shadow ? 'text-shadow' : '' }}">{{ $experience->name_es }}</h2>
                </div></a>
        @endforeach
    </div>
</section>

<section class="articles">
    <div class="container">
        @foreach ($posts as $post )
        <x-post-card :post="$post"/>
        @endforeach
        <div class="flex flex-wrap items-center my-8">
            <div class="w-full articles-navigation">
                {{ $posts->links() }}
            </div>
        </div>
        
    </div>
</section>

@endsection