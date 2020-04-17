
    <div class="flex flex-wrap items-center my-24">
        <a class="w-full lg:w-5/12" href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}">
            <div class="bg-cover bg-no-repeat bg-center p-40 shadow-7xl" style="background-image:url({{ $post->sizes['medium'] }})"></div>
        </a>
        <div class="w-full lg:w-7/12 ml-auto font-secondary text-2xl px-6 lg:px-10 py-8 lg:py-0">
            <a href="{{ $locale == config('app.fallback_locale') ? route('blog.post', ['slug' => $post->slug_es ]) : route('localized.blog.post', ['slug' => $post->slug_es, 'lang' => $locale ]) }}">
                <h2 class="text-4xl lg:text-6xl font-bold text-gray-400 leading-none">{{ ${'post'}->{'title_' . $locale} }}</h2>
            </a>
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
