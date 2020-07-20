<header class="fixed z-20 top-0 w-full">
    <nav-menu :alt="true" :top="50">
        <template #top>
            <ul class="menu-social hidden lg:flex border-red-400 border-b-4 px-4 py-2">
                <li class="mx-2"><a href="https://www.facebook.com/JaliscoEsMexico/" target="_blank"  rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'facebook-square']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://www.instagram.com/jalisco.esmexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'instagram']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'twitter-square']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://www.youtube.com/user/JaliscoEsMexicoTube" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'youtube']"></font-awesome-icon></a></li>
            </ul>
        </template>
        <template #logo>
            <a href="{{ url('/') }}" class="menu-link block ml-4 lg:ml-0 {{ Route::is('home') ? 'is-active' : '' }}">
                @include('partials.logo')
            </a>
        </template>
        <ul class="relative z-10 flex flex-col lg:flex-row lg:flex-wrap justify-center lg:justify-end items-center lg:items-end text-lg lg:text-lg leading-tight">
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ Route::is('jalisco') || Route::is('localized.jalisco') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('jalisco') : route('localized.jalisco', ['lang' => $locale ]) }}"><span class="inline-block lg:block">@lang('menu.jalisco')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ Route::is('mi-jalisco') || Route::is('localized.mi-jalisco') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('mi-jalisco') : route('localized.mi-jalisco', ['lang' => $locale ]) }}"><span class="inline-block lg:block mr-1 lg:mr-0">@lang('menu.this-is')</span><span class="inline-block lg:block">@lang('menu.mi-jalisco-alt')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ Route::is('schedule') || Route::is('localized.schedule') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('schedule') : route('localized.schedule', ['lang' => $locale ]) }}"><span class="inline-block lg:block">@lang('menu.schedule')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ (Route::is('regions') || Route::is('region')) || Route::is('localized.regions') || Route::is('localized.region') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('regions') : route('localized.regions', ['lang' => $locale ]) }}"><span class="inline-block lg:block">@lang('menu.regions')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ (Route::is('experiences') || Route::is('experiences.category') || Route::is('experiences.destination')) || Route::is('localized.experiences') || Route::is('localized.experiences.category') || Route::is('localized.experiences.destination') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('experiences') : route('localized.experiences', ['lang' => $locale ]) }}"><span class="inline-block lg:block">@lang('menu.experiences')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ (Route::is('routes') || Route::is('route')) || Route::is('localized.routes') || Route::is('localized.route')? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('routes') : route('localized.routes', ['lang' => $locale ])}}"><span class="inline-block lg:block">@lang('menu.routes')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link block pl-4 lg:pl-0 py-1 lg:py-0 {{ Route::is('business-travel') || Route::is('localized.business-travel') ? 'is-active' : '' }}" href="{{ $locale == config('app.fallback_locale') ? route('business-travel') : route('localized.business-travel', ['lang' => $locale ]) }}"><span class="inline-block lg:block mr-1 lg:mr-0">@lang('menu.events-alt')</span><span class="inline-block lg:block">@lang('menu.conventions')</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center relative"><a class="menu-link inline-block py-2 px-4 button ml-4 lg:ml-0" href="https://jaliscoatualcance.visitjalisco.com.mx/"><span class="inline-block lg:block uppercase text-sm">@lang('menu.offers')</span></a></li>
            <li class="mx-3 w-full lg:hidden">
                <ul class="flex border-red-400 border-b-4 px-4 pt-4 pb-2">
                    <li class="mx-2"><a href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'facebook-square']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://www.instagram.com/jalisco.esmexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'instagram']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'twitter-square']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://www.youtube.com/user/JaliscoEsMexicoTube" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'youtube']"></font-awesome-icon></a></li>
                </ul>
            </li>
        </ul>
    </nav-menu>
</header>
