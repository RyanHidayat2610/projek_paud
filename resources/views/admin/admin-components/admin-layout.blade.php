<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel Admin PAUD">
    <meta name="author" content="PAUD Admin">

    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

    
    ...
    @stack('styles')
    <title>{{ $title ?? 'Judul Default' }}</title>
</head>
<body>
    <div>
        @include('admin.admin-components.admin-navbar')

        <main>
            @yield('content')
            
        </main>
        @stack('scripts')
        @include('admin.admin-components.admin-footer')
    </div>
</body>
</html>