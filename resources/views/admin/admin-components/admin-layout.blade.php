<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/admin.css') }}">
    

    <title>{{ $title ?? 'Judul Default' }}</title>
</head>
<body>
    <div>
        @include('admin.admin-components.admin-navbar')

        <main>
            @yield('admin-content')
        </main>

        @include('admin.admin-components.admin-footer')
    </div>
</body>
</html>