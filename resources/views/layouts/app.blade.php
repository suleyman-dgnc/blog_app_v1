<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sistemi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Anasayfa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Yeni Yazı Ekle</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <h3>Blog Yazıları</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2025 Blog Sistemi (SÜLEYMAN DÖĞÜNCÜ). Tüm Hakları Saklıdır.</p>
</footer>

<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
