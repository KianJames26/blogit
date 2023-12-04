<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/blogs.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <x-shared.header :user="$user"></x-shared.head>
    </x-slot>
    {{--? MAIN --}}
    <x-shared.search></x-shared.search>
    @if ($searchedBlogs->count() > 0)
    <section class="other--blogs">
        <a href="/blogs"><i class="bi bi-arrow-left txt__xl"></i></a>
        <h2 class="txt__m">Search Result for : "{{request('search')}}"</h2>
        <x-shared.pagination :blogs="$searchedBlogs" scrollTo="&search={{request('search')}}" />
        <div class="blogs">
            @foreach ($searchedBlogs as $blog)
                <x-shared.blog :blog="$blog"></x-shared.blog>
            @endforeach
        </div>
        <x-shared.pagination :blogs="$searchedBlogs" scrollTo="&search={{request('search')}}" />
    </section>
    @else
    <section class="other--blogs">
        <a href="/blogs"><i class="bi bi-arrow-left txt__xl"></i></a>
        <h2 class="txt__m">Search Result for : "{{request('search')}}"</h2>
        <p class="txt__s--bold">No result</p>
    </section>
    @endif
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
	    <script src="{{asset('js/showNavigation.js')}}"></script>
    </x-slot>
</x-layout.layout>
