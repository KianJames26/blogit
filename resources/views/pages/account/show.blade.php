<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/my_blogs.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <x-shared.header :user="$user"></x-shared.head>
    </x-slot>
    {{--? MAIN --}}
    <x-shared.search></x-shared.search>
    <section class="profile">
        <div class="profile--picture__group">
        @if ($account->profile_picture)
            <img
            src="{{$account->profile_picture}}"
            alt=""
            class="profile--picture"
        />
        @else
            <i class="bi bi-person-circle profile--picture"></i>
        @endif
            <a href="/account/edit/{{$account->id}}" class="edit--profile">
                <i class="bi bi-pencil-fill"></i>
            </a>
        </div>

        <p class="full--name txt__m">{{$account->first_name}} {{$account->last_name}}</p>
        <p class="username txt__s">&commat;{{$account->username}}</p>
    </section>
    <section class="user--blogs">
        <h2 class="txt__l">Blogs</h2>
        @if ($blogs->count() > 0)
        <div class="blogs">
            @foreach ($blogs as $blog)
            <x-user-blog :blog="$blog"></x-user-blog>
            @endforeach
        </div>
        @else
            <div class="no__blogs">
                <h2 class="txt__l">No Blogs Posted Yet!</h2>
                <p class="txt__s--bold">Create your first blog by <a href="/blogs/create">Clicking Here</a>!</p>
            </div>
        @endif
    </section>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
	    <script src="{{asset('js/showNavigation.js')}}"></script>
    </x-slot>
</x-layout.layout>
