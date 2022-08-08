<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:site_name" content="javokhir-media.uz">
    <meta property="og:url" content="javokhir-media.uz">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="@yield('type')">
    <meta property="og:image" content="@yield('image')">
    <meta property="article:published_date" content="@yield('date')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/prism.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/aos.css">
    <link rel="icon" href="/icon.png">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Blog') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container content mb-2" style="margin-top: 5rem;">

    <div class="row">
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-4">
            <div data-aos="zoom-in" data-aos-duration="1000">
                <h5 class="m-2 pb-2">Izlash</h5>
                <div class="card shadow-sm mb-2">
                    <div class="card-body">
                        <form class="input-group mb-3 mt-3" method="get" action="/search">
                            <input type="text" class="form-control search-input"
                                   placeholder="Izlash uchun matn kiriting" name="q"
                                   aria-label="Izlash uchun matn kiriting" aria-describedby="button"
                                   value="{{ request()->input('q') }}" required>
                            <button class="btn btn-outline-primary" type="submit" id="button">Izlash</button>
                        </form>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="1000">
                <h5 class="m-2 pb-2 pt-1">Categories</h5>
                <div class="card shadow-sm mb-2">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            @foreach($categories ?? '' as $category)
                                <li class="nav-item"><a href="{{ url('/category').'/'.$category->name }}"
                                                        class="nav-link text-decoration-none"><i
                                            class="bi bi-folder2-open"></i> {{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-2">
</div>
<footer class="bg-dark text-center text-white">
    <div class="container p-3">
        <section class="mb-2">
            <a class="m-1 text-decoration-none text-white" href="https://javokhir-media.uz" target="_blank"><i
                    class="bi bi-globe2"></i></a>
            <a class="m-1 text-decoration-none text-white" href="https://github.com/JavokhirMedia" target="_blank"><i
                    class="bi bi-github"></i></a>
            <a class="m-1 text-decoration-none text-white" href="https://telegram.me/Javokhir_Media" target="_blank"><i
                    class="bi bi-telegram"></i></a>
            <a class="m-1 text-decoration-none text-white" href="https://instagram.com/Javokhir_Media"
               target="_blank"><i class="bi bi-instagram"></i></a>
            <a class="m-1 text-decoration-none text-white" href="https://facebook.com/raxmonberganov.javohir"
               target="_blank"><i class="bi bi-facebook"></i></a>
            <a class="m-1 text-decoration-none text-white" href="https://twitter.com/Javokhir_Media" target="_blank"><i
                    class="bi bi-twitter"></i></a>
            <a class="m-1 text-decoration-none text-white"
               href="https://www.linkedin.com/in/javohir-raxmonberganov-279b79237" target="_blank"><i
                    class="bi bi-linkedin"></i></a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Copyright © {{ date('Y') }}
        <a class="text-white text-decoration-none" href="https://javokhir-media.uz.uz/">Javohir Raxmonberganov</a>
    </div>
</footer>
<button type="button" class="btn btn-primary btn-floating" id="btn-back-to-top">
    <i class="bi bi-chevron-up"></i>
</button>
<script src="/js/bootstrap/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/js/prism.js"></script>
<script src="/js/script.js"></script>
<script type="text/javascript" src="/js/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
