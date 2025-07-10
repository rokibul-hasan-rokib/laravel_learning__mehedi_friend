<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category CRUD</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles') {{-- Optional: For pushing extra CSS from child views --}}
</head>
<body>

    @include('layouts.navbar')
    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') {{-- Optional: For pushing JS --}}
</body>
</html>
