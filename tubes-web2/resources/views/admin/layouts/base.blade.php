<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
	<title>Kelompok 2 | @yield('title')</title>
</head>
<body>
	<!-- SIDEBAR -->
	@include('admin.layouts.sidebar')
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
        @include('admin.layouts.navbar')
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">@yield('title')</h1>
			@yield('content')
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>