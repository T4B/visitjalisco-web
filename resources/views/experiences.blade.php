@extends('layouts.default')
@section('page-name', 'experiences')

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="background-image:url({{ asset('images/experiences/bg-experiences-main.jpg') }})">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold">Experiencias</h2>
            <p class="font-secondary text-lg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
        </div>
   </div>
</section>

@if ( $posts->count() )
<section class="blog">
    <div class="container pt-32  px-10 lg:px-0">
        <div class="w-full bg-gray-300 p-10">
            <div class="bg-cover bg-no-repeat bg-center p-48" style="background-image:url({{ $first_post->url }})"></div>
            <div class="text-lg text-white">
                <h2 class="font-secondary font-bold text-4xl my-2 text-gray-500">{{ $first_post->title }}</h2>
                @markdown( $first_post->excerpt )
            </div>
        </div>
            

        <div class="py-16">
            <div class="flex flex-wrap -mx-2">
                @foreach ($posts as $post)
                    @if ($loop->first) @continue @endif
                <div class="w-full lg:w-1/3 px-2 py-8 lg:py-0">
                    <div class="post bg-gray-300 p-4 text-left text-white text-lg">
                        <div class="bg-cover bg-no-repeat bg-center p-36 mb-6" style="background-image:url({{ $post->url }})"></div>
                        <h2 class="font-secondary font-bold text-2xl my-2 leading-none text-gray-500">{{ $post->title }}</h2>
                        @markdown ($post->excerpt)
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
        <div class="flex w-full py-4">
            <a class="font-serif text-3xl ml-auto text-white" href="{{ route('routes') }}">@lang('home.more-routes')</a>
        </div>
    </div>
</section>
@endif

<section class="categories font-secondary leading-tight">
    <div class="flex flex-wrap text-white text-center font-bold">
        @foreach ($experiences as $experience)
            @if ($loop->index == 0 || $loop->index == 5 )
                <a class="category w-full lg:w-3/7" href="{{ route('experiences.category', ['category' => $experience->slug ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @elseif ($loop->index > 0 && $loop->index < 5)
                <a class="category w-full lg:w-2/7" href="{{ route('experiences.category', ['category' => $experience->slug ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @else
                <a class="category w-full lg:w-1/3" href="{{ route('experiences.category', ['category' => $experience->slug ]) }}"><div class="experience" style="background-image:url({{ $experience->url }})">
            @endif
                    <h2 class="text-2xl">{{ $experience->name_es }}</h2>
                </div></a>
        @endforeach
    </div>
</section>

@endsection