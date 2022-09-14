<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StatLearning 📚</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand">
                <span>Stat</span>Learning
            </a>
            <button class="navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto mb- mb-lg-0">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('result')}}">{{ __('COURSE') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('BLOG') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('CONTACT US') }}</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="home" id="home">

        <div class="deco-shape shape-1">
            <img src="./images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
            <img src="./images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
            <img src="./images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
            <img src="./images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

            <p class="section-subtitle ms-5">ยินดีต้อนรับสู่คลาสเรียนสถิติของเรา</p>

            <h1 class="main-heading ms-5">
                คลาสเรียนจาก
                <span class="underline-img">ผู้สอนชั้นนำ <img src="./images/banner-line.png" alt="line"></span>
            </h1>

            <p class="section-text ms-5">

                สถิติ หมายถึง ศาสตร์หรือวิชาที่ว่าด้วยหลักการและระเบียบวิธีทางสถิติ สถิติใน ความหมาย นี้มักเรียกว่า สถิติศาสตร์ (Statistics)

            </p>
        </div>
        <div class="home-right">

            <div class="img-box">

                <img src="./images/banner-img-bg.png" alt="colorful background shape" class="background-shape">

                <img src="./images/banner-img.png" alt="banner image" class="banner-img">

                <img src="./images/banner-aliment-icon-4.png" alt="" class="icon-4  drop-anim ">

            </div>

        </div>

    </section>

</body>

<!-- -->
<footer class="bg-dark text-center text-lg-start fixed-bottom">
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>

