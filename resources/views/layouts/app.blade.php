<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jasa Kaca Film</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Kaca Film</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
            </ul>

            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-danger">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-light" href="/login">Admin</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; {{ date('Y') }} Jasa Kaca Film
</footer>

</body>
</html>
