<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/create_blog.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <x-shared.header :user="$user"></x-shared.head>
    </x-slot>
    {{--? MAIN --}}
    <x-shared.search></x-shared.search>
    <a href="{{url()->previous()}}"><i class="bi bi-arrow-left txt__xl"></i></a>
    <h2 class="txt__l">Create New Blog</h2>
    <form method="POST" action="/blogs/store" enctype="multipart/form-data">
        @csrf
        <div class="form--group">
            <label for="title" class="txt__s">
                Title <span class="required txt__s"></span>
            </label>
            <input type="text" name="blog_title" id="title" class="btn txt__s" value="{{old('blog_title')}}"/>
        </div>
        @error('blog_title')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form--group">
            <label for="description" class="txt__s">
                Description <span class="required txt__s"></span>
            </label>
            <textarea
                name="blog_description"
                id="description"
                class="txt__s btn"
            >{{old('blog_description')}}</textarea>
        </div>
        @error('blog_description')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form--group">
            <label for="image" class="txt__s">Blog Image (Optional)</label>
            <input
                type="file"
                name="blog_image"
                id="image"
                accept="image/png, image/jpeg, image/jpg, image/tiff, image/tif"
                value="{{ old('blog_image') }}"
            />
            <label for="image" class="custom--file__style" id="dragZone">
                <div class="custom--file__label">
                    <i class="bi bi-cloud-plus-fill"></i>
                    <p class="txt__m">Drag or Browse for Image</p>
                </div>
            </label>
            <div class="image--preview" id="imagePreview">
                <div class="remove--image" onclick="removePreview()">
                    <i class="bi bi-x-circle-fill"></i>
                </div>
                <img
                    src="https://placehold.co/3000x4000"
                    alt=""
                    id="selectedImage"
                />
            </div>
        </div>
        <button type="submit" class="btn txt__s">
            <i class="bi bi-check-circle-fill"></i> Post Blog
        </button>
    </form>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
        <script src="{{asset('js/dragAndDropFile.js')}}"></script>
        <script src="{{asset('js/showUploadedImage.js')}}"></script>
	    <script src="{{asset('js/showNavigation.js')}}"></script>
    </x-slot>
</x-layout.layout>
