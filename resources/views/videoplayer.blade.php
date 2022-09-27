<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>StatLearning 📚</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap"
      rel="stylesheet"
    />

    <link href="{{ asset('/css/video.css') }}" rel="stylesheet">

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

  <div class="container d-flex justify-content-between">
      <div class="video">
          <iframe width="860" 
          height="480" 
          src="https://www.youtube.com/embed/4ZEffYE3VkQ" 
          title="YouTube video player" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
          </iframe>
      </div>
    </main>

    <div class="lesson_selector">
      <h2 class="mt-5 mb-3 fw-bolder  text-center">หลักสถิติ 1</h2>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action"
          >บทที่ 1 การวิเคราะห์ข้อมูลเบื่องต้น</a
        >
        <a href="#" class="list-group-item list-group-item-action"
          >บทที่ 2 ตัวแปรสุ่มและการแจกแจงความน่าจะเป็น</a
        >
        <a href="#" class="list-group-item list-group-item-action"
          >บทที่ 3 การแจกแจงค่าของสถิติ</a
        >
        <a
          href="#"
          class="list-group-item list-group-item-action disabled"
          tabindex="-1"
          aria-disabled="true"
          >post test</a
        >
      </div>

      <div class="d-grid gap-2 col-6 mx-auto mt-3">
          <button class="btn btn-primary" type="button">
            ทดสอบ
          </button>
        </div>

      <div class="d-grid gap-2 col-6 mx-auto mt-2">
          <button class="btn btn-warning" type="button">
            รับใบรับรอง
          </button>
        </div>
    </div>
  </div>

  <script src="./js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>