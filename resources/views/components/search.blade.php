<form action="/search" class="search" method="GET" role="search">
    <div class="form-field relative">
        <input type="text" name="q" class="w-full bg-gray-50 py-2 px-4 outline-none" placeholder="@lang('search.placeholder')" value="{{ request()->get('q') }}">
        <button type="submit" class="search-icon focus:outline-none"><font-awesome-icon :icon="['fas', 'search']" fixed-width ></font-awesome-icon> </button>
    </div>
</form>