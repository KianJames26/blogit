<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="css/login.css" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <a href="/"><h1 class="txt__xl">BLOGiT</h1></a>
    </x-slot>
    {{--? MAIN --}}
    <form action="blogs.html" autocomplete="on">
        @csrf
        <h2 class="txt__l">Login</h2>
        <div class="form-group">
            <input
                type="text"
                name="username"
                id="username"
                placeholder=" "
                class="txt__s"
            />
            <label for="username" class="txt__s">Username/Email</label>
        </div>
        <div class="form-group">
            <input
                type="password"
                name="password"
                id="password"
                placeholder=" "
                class="txt__s"
                autocomplete="off"
            />
            <label for="password" class="txt__s">Password</label>
            <i
                class="bi bi-eye-slash-fill"
                id="passwordIcon"
                onclick="showPassword('password', 'passwordIcon')"
            ></i>
        </div>
        <input type="submit" value="Login" class="txt__s btn" />
        <p class="txt__s">
            Don't have an account? <a href="/signup">Click Here</a> to Sign Up
        </p>
    </form>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
        <script src="js/showPassword.js"></script>
    </x-slot>
</x-layout.layout>
