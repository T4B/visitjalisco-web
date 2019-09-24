@extends('layouts.default')
@section('page-name', 'post')
@section('og.image', $post->sizes['og'] ?? asset('/images/og.jpg'))

@section('css')
    <link rel="stylesheet" href="{{ mix('css/swiper.css') }}" />
@endsection

@section('content')
<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ $post->url }})">
   <div class="container flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0 text-content">
            <h2 class="text-6xl font-bold leading-none">{{ ${'post'}->{'title_' . $locale} }}</h2>
        </div>
   </div>
</section>


<section class="post">
    <div class="container py-12">
        <div class="flex flex-wrap">
             <div class="post-content w-full lg:w-8/12">
                <div class="flex flex-wrap items-center">
                    <div class="w-full text-2xl text-gray-500 px-10 lg:px-0 text-content">
                        @markdown( ${'post'}->{'text_' . $locale} )
                    </div>
                </div>
                <div class="social">
                    <div class="container">
                        <div class="w-full my-12 flex flex-wrap px-10 lg:px-0">
                            @component('components.share', [
                                'title' => ${'post'}->{'title_' . $locale}, 
                                'href' => route('blog.post', ['slug' => ${'post'}->{'slug_' . $locale} ])])
                            @endcomponent
                            <div class="w-full lg:w-1/2 text-right my-6 lg:my-0">
                                <a href="{{ route('experiences') }}" class="button text-xl mx-auto  px-8 py-2 shadow-md bg-purple-500">@lang('experiences.all')</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sidebar mx-8 lg:mx-0 w-full lg:w-3/12 lg:ml-auto py-12">
                <div class="categories bg-gray-50 rounded-xl">
                    <div class="head text-center py-2 px-4">
                        <h3 class="text-2xl font-bold text-gray-400 my-2">@lang('post.more-experiences')</h3>
                        <hr class="h-px bg-white my-0"></hr>
                    </div>
                    <div class="body pt-4 pb-8 px-4 flex flex-wrap py-2">
                        @foreach ($categories as $category)
                            <div class="w-1/2 text-center py-2">
                                <a href="{{ $locale == config('app.fallback_locale') ? route('experiences.category', ['category' => $category->slug ] ) : route('localized.experiences.category', ['category' => $category->slug, 'lang' => $locale ]) }}" class="text-white py-1 px-4 inline-block rounded-lg text-lg leading-tight {{ $post->experiences->contains($category->id)  ? 'bg-red-400' : 'bg-gray-700' }}">{{ ${'category'}->{'name_' . $locale} }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="regions rounded-xl my-12">
                    <div class="head text-center py-2 px-4 bg-gray-50 rounded-t-xl">
                        <h3 class="text-2xl font-bold text-gray-400 my-2">@lang('post.regions')</h3>
                    </div>
                    <div class="body pt-4 pb-8 px-4 flex flex-wrap py-2 bg-white rounded-b-xl border border-gray-50">
                        @foreach ($regions as $region)
                            <div class="flex-1 text-center">
                                <a href="{{ $locale == config('app.fallback_locale') ? route('region', ['slug' => $region->slug ]) : route('localized.region', ['slug' => $region->slug, 'lang' => $locale ]) }}" class="py-1 px-4 inline-block text-lg leading-tight {{ $post->regions->contains($region->id)  ? 'text-green-200 font-bold' : 'text-gray-400' }}">{{ Str::replaceFirst( 'Región', '', ${'region'}->{'name_' . $locale}) }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="search">
                    @component('components.search')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    
</section>



@component('components.posts-slider', ['posts' =>$posts])
@endcomponent

@endsection