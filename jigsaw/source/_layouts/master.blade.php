<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
	<title>Ilyosjon Kamoldinov</title>
	<style>
	body {
		font-family: 'PT Serif';
	}
</style>
</head>
<body class="flex flex-col md:flex-row relative lg:flex-row text-black">
	@include('_partials.header')
	<main class="w-full relative overflow-auto md:w-3/4 lg:w-3/4 p-2">
		@yield('body')
	</main>
</body>
</html>
