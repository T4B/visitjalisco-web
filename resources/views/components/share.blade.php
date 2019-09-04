<ul class="w-full lg:w-1/2 flex justify-start text-2xl">
    {{--<li class="mr-3 lg:mx-1">
        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="#" target="_blank" rel="noopener">
            <font-awesome-icon :icon="['fas', 'plus-square']" fixed-width></font-awesome-icon>
        </a>
    </li>--}}
    <li class="mr-3 lg:mx-1">
        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" 
            href="https://www.facebook.com/sharer/sharer.php?u={!! urlencode($href) !!}" 
            onclick="javascript:window.open(  this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
            target="_blank" 
            rel="noopener" 
            title="Compartir en Facebook">
            <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
        </a>
    </li>
    <li class="mr-3 lg:mx-1">
        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" 
            href="https://twitter.com/share?url={!! urlencode($href) !!}&amp;text={{ $title}}" 
            onclick=" javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
            target="_blank" 
            rel="noopener" 
            title="Compartir en Twitter">
            <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
        </a>
    </li>
    <li class="lg:mr-0 lg:mx-1">
        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" 
            href="https://pinterest.com/pin/create/button/?url={{ $href }}/&media=&description={{ $title }}" 
            target="_blank" rel="noopener">
            <font-awesome-icon :icon="['fab', 'pinterest']" fixed-width></font-awesome-icon>
        </a>
    </li>
    <li class="lg:mx-1">
        <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" 
            href="mailto:?Subject={{ $title }}>&Body={{ $title }} {{ $href }}" >
            <font-awesome-icon :icon="['far', 'envelope']" fixed-width></font-awesome-icon>
        </a>
    </li>
</ul>
