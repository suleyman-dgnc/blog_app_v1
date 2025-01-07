<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sistemi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJp7Qtmc2aqg7h24vRSHzJrXvbbawRjtVsFViw/gZ7Hg08l9jqk7tbw37Kn5" crossorigin="anonymous">


</head>
<body>

    <!-- Blog başlığı -->
    <div class="header">
        Blog Yazıları
    </div>

    <!-- Menü bağlantıları -->
    <ul class="menu">
        <li><a href="{{ route('posts.index') }}">Anasayfa</a></li>
        <li><a href="{{ route('posts.create') }}">Yeni Yazı Ekle</a></li>
    </ul>


    <!-- İçerik alanı -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2025 Blog Sistemi (SÜLEYMAN DÖĞÜNCÜ). Tüm Hakları Saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybP8rF4Ltw7Bdr0pU4r0zrV4E6c00f72lX9fXfM8J7FjB3wJQ9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0J9kWv3gT56Pp3LB2l1jI5yoxhW8e8xTuw5tAcGF8FGWvhFz" crossorigin="anonymous"></script>
</body>
</html>
