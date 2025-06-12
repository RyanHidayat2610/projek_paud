<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <title>{{ $title ?? 'Judul Default' }}</title>
</head>
<body>
    <div>
        <x-nav-bar></x-nav-bar>
        <main>
            @yield('content')
        </main>

        <x-footer></x-footer>
    </div>
</body>
</html>