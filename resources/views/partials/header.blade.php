<header class="fixed z-20 top-0 w-full">
    <nav-menu :alt="true">
        <template #top>
            <ul class="menu-social hidden lg:flex border-red border-b-4 px-4 py-2">
                <li class="mx-2"><a href="https://www.facebook.com/JaliscoEsMexico/" target="_blank"  rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'facebook-square']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://www.instagram.com/jalisco.esmexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'instagram']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'twitter-square']"></font-awesome-icon></a></li>
                <li class="mx-2"><a href="https://www.youtube.com/user/JaliscoEsMexicoTube" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'youtube']"></font-awesome-icon></a></li>
            </ul>
        </template>
        <template #logo>
            <a href="{{ url('/') }}" class="block ml-4 lg:ml-0">
                @include('partials.logo')
            </a>
        </template>
        <ul class="relative z-10 flex flex-col lg:flex-row lg:flex-wrap justify-center lg:justify-end items-center lg:items-end text-lg lg:text-lg">
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('jalisco') }}"><span class="inline-block lg:block">Jalisco</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('mi-jalisco') }}"><span class="inline-block lg:block mr-1 lg:mr-0">Este es</span><span class="inline-block lg:block">Mi Jalisco</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('agenda') }}"><span class="inline-block lg:block">Agenda</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('regiones') }}"><span class="inline-block lg:block">Regiones</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('experiencias') }}"><span class="inline-block lg:block">Experiencias</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('rutas') }}"><span class="inline-block lg:block">Rutas</span></a></li>
            <li class="mx-3 w-full lg:w-auto lg:text-center"><a class="block pl-4 lg:pl-0 py-1 lg:py-0" href="{{ route('eventos') }}"><span class="inline-block lg:block mr-1 lg:mr-0">Eventos</span><span class="inline-block lg:block">y convenciones</span></a></li>
            <li class="mx-3 w-full lg:hidden">
                <ul class="flex border-red border-b-4 px-4 pt-4 pb-2">
                    <li class="mx-2"><a href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'facebook-square']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://www.instagram.com/jalisco.esmexico/" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'instagram']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'twitter-square']"></font-awesome-icon></a></li>
                    <li class="mx-2"><a href="https://www.youtube.com/user/JaliscoEsMexicoTube" target="_blank" rel="noopener"><font-awesome-icon class="text-2xl" :icon="['fab', 'youtube']"></font-awesome-icon></a></li>
                </ul>
            </li>
        </ul>
    </nav-menu>
</header>
