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
    @if ($latestBlogs->count() > 0)
    <section class="latest--blogs">
        <h2 class="txt__l">Latest Blogs</h2>
        <div class="blog--slider">
            <i
                class="bi bi-caret-left-fill txt__xl move--button"
                onclick="moveSlides(-1)"
            ></i>
            <div class="blog--slider__wrapper">
                @foreach ($latestBlogs as $latestBlog)
                    <x-latest-blog :blog="$latestBlog"></x-latest-blog>
                @endforeach
            </div>
            <i
                class="bi bi-caret-right-fill txt__xl move--button"
                onclick="moveSlides(1)"
            ></i>
        </div>
        <div class="slider--pagination" id="sliderPagination"></div>
    </section>

    <section class="other--blogs" id="otherBlogs">
        <h2 class="txt__l">Other Blogs</h2>
        <x-shared.pagination :blogs="$blogs" scrollTo="#otherBlogs" />
        <div class="blogs">
            @foreach ($blogs as $blog)
                <x-shared.blog :blog="$blog"></x-shared.blog>
            @endforeach
        </div>
        <x-shared.pagination :blogs="$blogs" scrollTo="#otherBlogs" />
    </section>
    @else
    <section class="latest--blogs">
        <h2 class="txt__l">No Blogs Posted Yet!</h2>
        <p class="txt__s--bold">Create first blog by <a href="/blogs/create">Clicking Here</a>!</p>
    </section>
    @endif
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
        <script src="{{asset('js/blogsSlider.js')}}"></script>
	    <script src="{{asset('js/showNavigation.js')}}"></script>
    </x-slot>
</x-layout.layout>
