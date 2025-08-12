{{-- resources/views/index.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Homepage' }} | {{ config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
{{-- ===== HEADER ===== --}}
<header class="bg-dark text-white py-3">
    @include('layouts.header')
</header>

@yield('content')

{{-- ===== FOOTER ===== --}}
<footer class="bg-light py-3 mt-auto border-top">
    @include('layouts.footer')
</footer>
</body>
</html>
