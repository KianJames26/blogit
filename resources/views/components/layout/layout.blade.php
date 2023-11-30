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
        {{$css_imports}}
	</head>
	<body class="dark-mode">
		<header>
			{{$header}}
		</header>
		<main>
			{{ $slot }}
		</main>
		<footer></footer>

        @isset($js_imports)
            {{$js_imports}}
        @endisset
	</body>
</html>
