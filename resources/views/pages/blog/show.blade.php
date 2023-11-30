
<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/blog.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <x-shared.header :user="$user"></x-shared.head>
    </x-slot>
    {{--? MAIN --}}
    <x-shared.search></x-shared.search>
    <section class="blog--container">
        <a href=" {{url()->previous()}} "><i class="bi bi-arrow-left txt__xl"></i></a>
        <h1 class="blog--title txt__l"> {{$blog->blog_title}} </h1>
        <p class="blog--author txt__s">
            {{date('F d, Y', strtotime($blog->created_at))}} by {{$blog->author->first_name}} {{$blog->author->last_name}}
        </p>
        <div class="blog--image">
            @if ($blog->blog_image)
                <img src="{{$blog->blog_image}}" alt="" loading="lazy"/>
            @else
                <div class="no-image"><i class="bi bi-image"></i></div>
            @endif
        </div>
        <p class="blog--description txt__s">
            {{$blog->blog_description}}
        </p>
    </section>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
	    <script src="{{asset('js/showNavigation.js')}}"></script>
    </x-slot>
</x-layout.layout>
