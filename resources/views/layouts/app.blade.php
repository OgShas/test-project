{{-- resources/views/index.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Homepage' }} | {{ config('app.name') }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Your custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

{{-- ===== HEADER ===== --}}
<header class="bg-dark text-white py-3">
    @include('layouts.header')
</header>

@yield('content')

{{-- ===== FOOTER ===== --}}
<footer class="bg-light py-3 mt-auto border-top">
    @include('layouts.footer')
</footer>

{{-- Bootstrap JS & Popper.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- Your custom JS --}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
