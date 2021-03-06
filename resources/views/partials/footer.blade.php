<footer class="bg-red-400 text-sm">
    <div class="container py-8">
        <div class="flex flex-wrap text-white">
            <div class="w-full lg:w-1/3 px-10 mb-6 lg:mb-0 text-center lg:text-left">
                <h2 class="font-bold font-secondary"> @lang('general.sitemap') </h2>
                <ul class="sitemap lg:pl-8 leading-relaxed pt-4 pb-2">
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('jalisco') : route('localized.jalisco', ['lang' => $locale ]) }}">@lang('menu.jalisco')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('mi-jalisco') : route('localized.mi-jalisco', ['lang' => $locale ]) }}">@lang('menu.mi-jalisco')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('schedule') : route('localized.schedule', ['lang' => $locale ]) }}">@lang('menu.schedule')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('regions') : route('localized.regions', ['lang' => $locale ]) }}">@lang('menu.regions')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', ['lang' => $locale ]) }}">@lang('menu.experiences')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('routes') : route('localized.routes', ['lang' => $locale ]) }}">@lang('menu.routes')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ $locale == config('app.fallback_locale') ? route('business-travel') : route('localized.business-travel', ['lang' => $locale ]) }}">@lang('menu.events')</a></li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4 text-center relative">
                <h1 class="font-bold text-2xl mb-2"> @lang('general.follow-us') </h1>
                <ul class="w-full lg:w-auto flex justify-center text-2xl">
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mr-0 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://www.instagram.com/jalisco.esmexico/" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'instagram']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://www.youtube.com/user/JaliscoEsMexicoTube" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'youtube']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                </ul>
                <button class="no-underline mt-6 mx-auto focus:outline-none block" @click="showContactForm">Contacto</button>
                {{--<a class="inline-block mt-2 no-underline" href="https://drive.google.com/drive/folders/1G7e0CqV0eOSj8UMtVI4kJM4SOGMDeiIm" target="_blank">Media kit</a>
                <a class="lg:absolute lg:inset-x-0 lg:bottom-0 no-underline" href="{{ route('page', ['slug' => 'aviso-de-privacidad' ])}}">aviso de privacidad</a>--}}
                <ul>
                    @foreach ($footer_links as $footer_link)
                    <li class="mt-{{ $footer_link->top_space }}">
                        <a href="{{ $footer_link->url }}" target="{{ $footer_link->target }}">{{ ${'footer_link'}->{'title_' . $locale} }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full lg:w-1/3 text-center ml-auto mt-4 lg:mt-0 px-10">
                @lang('general.footer.text')
                <div class="flex flex-row items-center">
                    <div class="w-1/2 border-r border-white">
                        <img class="h-8 mx-auto" src="{{ asset('images/Logo_turismo_blanco.svg') }}">
                    </div>
                    <div class="w-1/2">
                        <img class="h-24 mx-auto" src="{{ asset('images/jalisco.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<visitjalisco-contact 
    txt_name="@lang('contact.name')"
    txt_email="@lang('contact.email')" 
    txt_phone="@lang('contact.phone')" 
    txt_message="@lang('contact.message')" 
    txt_send="@lang('contact.send')" 
    txt_success="@lang('contact.success')">
</visitjalisco-contact>