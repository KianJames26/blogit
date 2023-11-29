<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="css/blogs.css" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <x-shared.header :user="$user"></x-shared.head>
    </x-slot>
    {{--? MAIN --}}
    <section class="actions">
        <form action="#" class="search--group">
            @csrf
            <input
                type="text"
                name="search"
                id="search"
                placeholder="Search"
                class="txt__s"
            />
            <button type="submit" class="search--button">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <a href="create_blog.html" class="btn">
            <i class="bi bi-plus-circle-fill"></i>
            <p class="txt__s">Create New Blog</p>
        </a>
    </section>
    <section class="latest--blogs">
        <h2 class="txt__l">Latest Blogs</h2>
        <div class="blog--slider">
            <i
                class="bi bi-caret-left-fill txt__xl move--button"
                onclick="moveSlides(-1)"
            ></i>
            <div class="blog--slider__wrapper">
                <div class="blog--container fade slide">
                    <div class="blog--container__image">
                        <div class="no-image"><i class="bi bi-image"></i></div>
                        <!-- <img src="https://placehold.co/4000x4000" alt="" /> -->
                    </div>
                    <div class="blog--container__details">
                        <h2 class="blog--title txt__m">Blog Title 1</h2>
                        <p class="blog--author txt__s">
                            January 01, 1997 by Kian James Querubin
                        </p>
                        <p class="blog--description txt__s">
                            This is a sample paragraph of a blog description of a blog in
                            Blogit. Only maximum of 2 lines will be shown on homepage.
                            More than that will be cut. The rest of the paragraph will be
                            shown in this page. In the ever-evolving world of blogging,
                            Blogit takes center stage as a platform designed to captivate
                            readers' attention from the very first glimpse. With a unique
                            feature that displays just a maximum of two lines on the
                            homepage, Blogit keeps users intrigued and eager to click for
                            more. As a blogger, this minimalist approach serves as a
                            powerful tool to entice visitors while preserving an element
                            of curiosity. And when they do click through, the magic
                            unfolds, revealing the rest of your thoughtfully crafted
                            paragraph on this dedicated page. Our user-friendly interface
                            and intuitive design make blogging a breeze on Blogit. You can
                            seamlessly express your ideas, stories, or insights, knowing
                            that the initial two-line snippet acts as your online teaser,
                            beckoning readers to explore the depth of your content.
                            Whether you're a seasoned blogger or just starting your
                            journey, Blogit ensures that your audience is always intrigued
                            and engaged, offering a unique platform that strikes the
                            perfect balance between curiosity and satisfaction. So go
                            ahead, share your thoughts with the world, and let Blogit's
                            innovative approach amplify your blogging experience.
                        </p>
                        <a href="blog.html" class="blog--link txt__s">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <i
                class="bi bi-caret-right-fill txt__xl move--button"
                onclick="moveSlides(1)"
            ></i>
        </div>
        <div class="slider--pagination" id="sliderPagination"></div>
    </section>

    <section class="other--blogs">
        <h2 class="txt__l">Other Blogs</h2>
        <div class="blogs">
            <div class="blog--container">
                <div class="blog--container__image">
                    <div class="no-image"><i class="bi bi-image"></i></div>
                    <!-- <img src="https://placehold.co/4000x4000" alt="" /> -->
                </div>
                <div class="blog--container__details">
                    <h2 class="blog--title txt__m">Blog Title 1</h2>
                    <p class="blog--author txt__s">
                        January 01, 1997 by Kian James Querubin
                    </p>
                    <p class="blog--description txt__s">
                        This is a sample paragraph of a blog description of a blog in
                        Blogit. Only maximum of 2 lines will be shown on homepage. More
                        than that will be cut. The rest of the paragraph will be shown
                        in this page. In the ever-evolving world of blogging, Blogit
                        takes center stage as a platform designed to captivate readers'
                        attention from the very first glimpse. With a unique feature
                        that displays just a maximum of two lines on the homepage,
                        Blogit keeps users intrigued and eager to click for more. As a
                        blogger, this minimalist approach serves as a powerful tool to
                        entice visitors while preserving an element of curiosity. And
                        when they do click through, the magic unfolds, revealing the
                        rest of your thoughtfully crafted paragraph on this dedicated
                        page. Our user-friendly interface and intuitive design make
                        blogging a breeze on Blogit. You can seamlessly express your
                        ideas, stories, or insights, knowing that the initial two-line
                        snippet acts as your online teaser, beckoning readers to explore
                        the depth of your content. Whether you're a seasoned blogger or
                        just starting your journey, Blogit ensures that your audience is
                        always intrigued and engaged, offering a unique platform that
                        strikes the perfect balance between curiosity and satisfaction.
                        So go ahead, share your thoughts with the world, and let
                        Blogit's innovative approach amplify your blogging experience.
                    </p>
                    <a href="blog.html" class="blog--link txt__s">
                        Read More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
        <script src="js/blogsSlider.js"></script>
	    <script src="js/showNavigation.js"></script>
    </x-slot>
</x-layout.layout>
