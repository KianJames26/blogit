<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>BLOGiT</title>

		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
		/>
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
        {{ $css_imports }}
	</head>
	<body class="dark-mode">
        @if (session('toast'))
            <div class="toast toast__show" id="toast">
                <p class="message txt__s">{{session('toast')}}</p>
            </div>
            <script>
                const toast = document.getElementById('toast');
                const toggleToast = () => {
                    setTimeout(() => {
                        toast.classList.toggle("toast__show");
                        toast.classList.toggle("toast__hide");
                    }, 3100);
                }
                toggleToast();
            </script>
        @endif
		<header>
			{{ $header }}
		</header>
		<main>
			{{ $slot }}
		</main>
		<footer></footer>

        @isset($js_imports)
            {{ $js_imports }}
        @endisset
	</body>
</html>
