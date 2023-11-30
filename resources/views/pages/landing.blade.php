<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <a href="/login" id="login" class="btn txt__s--bold">Login</a>
        <a href="/signup" id="signup" class="btn txt__s">Sign Up</a>
    </x-slot>
    {{--? MAIN --}}
    <article class="left">
        <h1 class="txt__xxl">BLOGiT</h1>
        <p class="txt__s">
            Your Digital Haven for Crafting Compelling Stories, Sharing Insights,
            and Building an Online Community of Wordsmiths!
        </p>
        <a href="/signup" id="get-started" class="txt__s btn"
            >Get Started!</a
        >
    </article>
    <article class="right">
        <img src="img/Wall post-amico.png" alt="" loading="lazy"/>
    </article>
    {{--? JS IMPORTS --}}
</x-layout.layout>
