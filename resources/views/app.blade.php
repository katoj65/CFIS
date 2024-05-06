<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">


<link rel="stylesheet" href="{{ asset('/public/css/dashlite.css?ver=2.2.0') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('/public/css/theme.css?ver=2.2.0') }}">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">

<!-- Scripts -->
@routes
<script src="{{ asset('/public/js/app.js') }}" defer></script>
<script src="{{ asset('/public/js/bundle.js?ver=2.2.0') }}"></script>
<script src="{{ asset('/public/js/scripts.js?ver=2.2.0') }}"></script>
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
