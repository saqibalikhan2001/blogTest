<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('resources/js/app.js') }}" defer></script>
    <?php /*@vite(['resources/css/app.css', 'resources/js/app.js']) */?>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('posts.index') }}">Blog Test</a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container d-lg-flex justify-content-between">
            <span class="text-light">Blog Test (c) <?php echo date("Y"); ?></span>
        </div>
    </footer>
</body>
</html>
