<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/frontend.js'])
    @inertiaHead
</head>
<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">
@inertia
</body>
</html>
