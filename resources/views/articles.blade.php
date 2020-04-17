@extends('layouts.default')
@section('page-name', 'articles')

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
    <div class="container pt-20 pb-0 px-6 lg:px-0">
        @component('components.search')
        @endcomponent
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