@if (count($posts))
<section class="posts-slider py-12">
    <div class="container px-6 lg:px-0">
        <div class="w-full px-10">
            <slider 
                class="outside-arrows" 
                :slides="3" 
                :space="30"  
                :arrowscolor="'text-red-400'"
                :outsidearrows="true"
                ref="carrousel" >
                @foreach ($posts as $post)
                <slide>
                    <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" style="background-image:url({{ $post->sizes['thumb'] }})">
                    <div class="text-white absolute bottom-8 font-serif" >
                        <a href="{{ route('blog.post', ['slug' => $post->slug_es ]) }}"><h2 class="font-bold text-xl">{{ ${'post'}->{'title_' . $locale} }}</h2></a>
                    </div>
                    </div>
                </slide>
                @endforeach
            </slider>
        </div>
    </div>
</section>
@endif