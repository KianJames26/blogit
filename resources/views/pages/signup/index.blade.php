<x-layout.layout>
    {{--? CSS IMPORTS --}}
    <x-slot name="css_imports">
        <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    </x-slot>
    {{--? HEADER --}}
    <x-slot name="header">
        <a href="/"><h1 class="txt__xl">BLOGiT</h1></a>
    </x-slot>
    {{--? MAIN --}}
    <form method="POST" action="/signup" autocomplete="off">
        @csrf
        <h2 class="txt__l">Sign Up</h2>
        <div class="form-group">
            <input
                type="text"
                name="first_name"
                id="first_name"
                placeholder=" "
                class="txt__s"
                value="{{old('first_name')}}"
            />
            <label for="first_name" class="txt__s">First Name</label>

        </div>
        @error('first_name')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form-group">
            <input
                type="text"
                name="last_name"
                id="last_name"
                placeholder=" "
                class="txt__s"
                value="{{old('last_name')}}"
            />
            <label for="last_name" class="txt__s">Last Name</label>
        </div>
        @error('last_name')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form-group">
            <input
                type="text"
                name="username"
                id="username"
                placeholder=" "
                class="txt__s"
                value="{{old('username')}}"
            />
            <label for="username" class="txt__s">Username</label>
        </div>
        @error('username')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form-group">
            <input
                type="text"
                name="email"
                id="email"
                placeholder=" "
                class="txt__s"
                value="{{old('email')}}"
            />
            <label for="email" class="txt__s">Email</label>
        </div>
        @error('email')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
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
        @error('password')
            <div class="error__container">
                <i class="bi bi-exclamation-triangle-fill txt__xs"></i>
                <p class="txt__xs">{{ $message }}</p>
            </div>
        @enderror
        <div class="form-group">
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                placeholder=" "
                class="txt__s"
                autocomplete="off"
            />
            <label for="password_confirmation" class="txt__s"
                >Confirm Password</label
            >
            <i
                class="bi bi-eye-slash-fill"
                id="passwordConfirmationIcon"
                onclick="showPassword('password_confirmation', 'passwordConfirmationIcon')"
            ></i>
        </div>
        <input type="submit" value="Sign Up" class="txt__s btn" />
        <p class="txt__s">
            Already have an account? <a href="/login">Click Here</a> to Login
        </p>
    </form>
    {{--? JS IMPORTS --}}
    <x-slot name="js_imports">
        <script src="{{asset('js/showPassword.js')}}"></script>
    </x-slot>
</x-layout.layout>
