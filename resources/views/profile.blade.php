<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>StatLearning 📚</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />

    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">


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
                      <a class="nav-link" href="{{route('comment')}}">{{ __('COMMENT') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">{{ __('CONTACT US') }}</a>
                    </li>
    
                    <li class="nav-item dropdown">
    
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="{{route('profile')}}">
                                {{ __('Profile') }}
                            </a>
                            
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

    <div class="content mt-5">
        <div class="thing mt-5 mb-3">
            <h2>Profile</h2>
            <p class="fs-3">
                บัญชีผู้ใช้
            </p>
        </div>
    </div>
    <div>
        <div>
            <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png?w=360" class="rounded mx-auto d-block mt-5 mb-5" style="width: 250px">
        </div>

        <div class="text-center">
            <p class="fw-bolder fs-4 mb-3">Username : <span class="fw-normal fs-4">{{ Auth::user()->name }}</span></p>

            <p class="fw-bolder fs-4 mb-3">Email : <span class="fw-normal fs-4">{{ Auth::user()->email}}</span></p>

        </div>
    </div>
    <!-- -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>

</html>