<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroClima Garut</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <header class="bg-success text-white py-3 shadow-sm">
        <div class="container text-center">
            <h1 class="h3 mb-2 fw-bold">AgroClima Kabupaten Garut</h1>
            @include('partials.navbar')
        </div>
    </header>

    <main class="container my-4 flex-grow-1">
        <div class="card shadow-sm p-4 bg-white">
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>