@extends('layouts.default')
@section('page-name', 'page')

@section('content')

<section class="headerimage multiply-40 bg-cover bg-no-repeat bg-center h-screen" style="">
   <div class="container text-content flex w-full font-secondary h-full relative">
        <div class="flex-1 text-left text-white absolute bottom-0 pb-8 text-2xl px-10 lg:px-0">
            <h2 class="text-6xl font-bold">{{ $page->name_es }}</h2>
        </div>
   </div>
</section>

<section class="region">
    <div class="container py-12">
        <div class="flex flex-wrap items-center">
            <div class="w-full text-content text-2xl text-gray-500 px-12 lg:px-0">
                @markdown( $page->text_es )
            </div>
        </div>
    </div>
</section>

@endsection