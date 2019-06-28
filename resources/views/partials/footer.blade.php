<footer class="bg-red">
    <div class="container py-10">
        <div class="flex flex-wrap text-white">
            <div class="w-full lg:w-1/3 px-10 mb-6 lg:mb-0 text-center lg:text-left">
                <h2 class="font-bold font-secondary">Mapa del sitio</h2>
                <ul class="sitemap lg:pl-8 leading-relaxed py-4">
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('jalisco') }}">Jalisco</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('mi-jalisco') }}">Este es mi Jalisco</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('agenda') }}">Agenda</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('regiones') }}">Regiones</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('experiencias') }}">Experiencia</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('rutas') }}">Ruta</a></li>
                    <li><font-awesome-icon :icon="['fas', 'horizontal-rule']" fixed-width class="mr-2 hidden lg:inline-block"></font-awesome-icon><a class="no-underline" href="{{ route('eventos') }}">Eventos y convenciones</a></li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4 text-center relative">
                <h1 class="font-bold text-2xl mb-2">Síguenos</h1>
                <ul class="w-full lg:w-auto flex justify-center text-2xl">
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://facebook.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="mr-3 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://twitter.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mr-0 lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://instagram.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'instagram']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                    <li class="lg:mx-1">
                        <a class="inline-block text-white w-8 h-8 flex justify-center items-center" href="https://youtube.com" target="_blank" rel="noopener">
                            <font-awesome-icon :icon="['fab', 'youtube']" fixed-width></font-awesome-icon>
                        </a>
                    </li>
                </ul>
                <a class="lg:absolute lg:inset-x-0 lg:bottom-0 no-unerline" href="#">aviso de privacidad</a>
            </div>
            <div class="w-full lg:w-1/3 text-center ml-auto mt-4 lg:mt-0 px-10">
                <p>Página Oficial del estado de Jalisco, México.</p> 
                <p>Compartimos y promovemos experiencias de los hermosos destinos vacacionales y culturales.</p>
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
</footer>