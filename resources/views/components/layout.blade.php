<!-- filepath: resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KALM - Skincare & Haircare' }}</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">KALM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Aquí movemos todo a la derecha -->
            <div class="collapse navbar-collapse ms-auto justify-content-end" id="navbarNav">
                <ul class="navbar-nav text-uppercase fw-semibold d-flex align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reviews.index') }}">Reseñas</a></li>

                    <!-- Icono del carrito -->
                    <li class="nav-item ms-3">
                        <a href="#" class="nav-link position-relative">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container flex-grow-1 py-4">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-info text-white text-center py-3 mt-auto">
        &copy; {{ date('Y') }} <strong>KALM</strong> — Asesoramiento en skincare & haircare
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
