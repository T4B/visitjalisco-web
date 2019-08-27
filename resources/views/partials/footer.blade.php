<footer class="bg-red-400">
    <div class="container py-10">
        <div class="flex flex-wrap text-white">
            <div class="w-full lg:w-1/3 px-10 mb-6 lg:mb-0 text-center lg:text-left">
                <h2 class="font-bold font-secondary"> @lang('general.sitemap') </h2>
                <ul class="sitemap lg:pl-8 leading-relaxed py-4">
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('jalisco') }}">@lang('menu.jalisco')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('mi-jalisco') }}">@lang('menu.mi-jalisco')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('schedule') }}">@lang('menu.schedule')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('regions') }}">@lang('menu.regions')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('experiences') }}">@lang('menu.experiences')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('routes') }}">@lang('menu.routes')</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('business-travel') }}">@lang('menu.events')</a></li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4 text-center relative">
                <h1 class="font-bold text-2xl mb-2"> @lang('general.follow-us') </h1>
                <ul class="w-full lg:w-auto flex justify-center text-3xl">
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
                <button class="no-underline mt-12 mx-auto focus:outline-none block" @click="showContactForm">Contacto</button>
                <a class="lg:absolute lg:inset-x-0 lg:bottom-0 no-underline" href="{{ route('page', ['slug' => 'aviso-de-privacidad' ])}}">aviso de privacidad</a>
            </div>
            <div class="w-full lg:w-1/3 text-center ml-auto mt-4 lg:mt-0 px-10">
                @lang('general.footer.text')
                <div class="flex flex-row items-center">
                    <div class="w-1/2 border-r border-white">
                        <img class="h-12 mx-auto" src="{{ asset('images/Logo_turismo_blanco.svg') }}">
                    </div>
                    <div class="w-1/2">
                        <img class="h-40 mx-auto" src="{{ asset('images/jalisco.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <visitjalisco-contact></visitjalisco-contact>
</footer>