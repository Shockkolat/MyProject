<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>StatLearning 📚</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />

  <link href="{{ asset('/css/result.css') }}" rel="stylesheet">

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

  <section class="features d-flex justify-content-evenly">
    <div class="features-left mt-4">
      <h2 class="section-title ms-4">หลักสถิติ 1</h2>

      <ul>
        <li class="features-item">
          <div>
            <img src="./images/narawit.jpg" class="rounded-circle" alt="Cinque Terre" />
          </div>

          <div class="warpper">
            <h3 class="item-title mt-5">Teacher: Narawit Choeychom</h3>
            <p class="item-text">📚 3 บทเรียน | ⏳ 2 ชั่วโมง</p>
            <p class="item-text">__________________________________</p>
          </div>
        </li>

        <div class="d-grid gap-2 col-4 mx-auto">
          <a class="btn btn-warning" type="button" href="{{ route('videoplayer') }}">
            เริ่มเรียน
          </a>
        </div>
      </ul>
    </div>

    <div class="features-right">
      <img src="./images/STATS.png" alt="core features image" />
    </div>
  </section>

  <!--Info-->

  <section class="info_course d-flex justify-content-evenly">
    <main>
      <div class="information mt-5">
        <h2 class="information-title">หลักสถิติ 1</h2>
        <p class="information-info">
          ส่วนของบทเรียน เป็นเนื้อหาทางวิชาสถิติ โดยใช้หนังสือหลักสถิติ 1
          แต่งโดย พิศมัย หาญมงคลพิพัฒน์ <br />
          โดยจะแบ่งออกเป็น 3 บทเรียน 
        </p>
          บทที่ 1 การวิเคราะห์ข้อมูลเบื่องต้น 
          <div class="col-lg-11 ms-auto">
          1.ค่าเฉลี่ยเลขคณิต <br />
          2.ความแปรปรวนและส่วนเบี่ยงเบนมาตรฐาน <br />
          3.สัมประสิทธิ์การกระจาย <br />
          </div>
          บทที่ 2 ตัวแปรสุ่มและการแจกแจงความน่าจะเป็น <br />
          <div class="col-lg-11 ms-auto">
          1.การแจกแจงความน่าจะเป็นแบบทวินาม <br />
          2.การแจกแจงความน่าจะเป็นแบบปกติ <br />
          </div>
          บทที่ 3 การแจกแจงค่าของสถิติ <br />
          <div class="col-lg-11 ms-auto">
          3.1 การแจกแจงของค่าเฉลี่ยตัวอย่าง <br />
          3.2 การแจกแจงของผลต่างค่าเฉลี่ยตัวอย่าง <br />
          3.3 การแจกแจงของค่าสัดส่วนตัวอย่าง <br />
          3.4 การแจกแจงของผลต่างค่าสัดส่วนตัวอย่าง
          </div>
        </p>
      </div>
    </main>
    <div class="d-flex flex-column bd-highlight mb-3">
      <div class="progress blue mt-5">
        <span class="progress-left">
          <span class="progress-bar"></span>
        </span>
        <span class="progress-right">
          <span class="progress-bar"></span>
        </span>
        <div class="progress-value fw-bolder">90%</div>
      </div>
      <h2 class="fw-bolder fs-5 text-center mb-4">ความคืบหน้า</h2>
        <a class="btn btn-warning"  href="{{route('download')}} " target="_blank">
          ดาวน์โหลดเอกสาร
        </a>
    </div>


    <div class="card mt-5 mb-auto">
      <div class="card-header">
        <h2 class="fw-bolder fs-4 text-center">certificate 📃</h2>
      </div>
      <div class="card-body">
        <p class="item-text">📚 3 บทเรียน | ⏳ 2 ชั่วโมง</p>
        <p class="item-text">ชื่อรับใบรับรอง : {{ Auth::user()->name }}</p>
        <div class="d-grid gap-2 col-7 mx-auto">
          <a href="{{route('certificate')}}" class="btn btn-warning" type="button" method="POST">
            รับใบรับรอง
          </a>
        </div>
      </div>

    </div>
  </section>


  <!--js-->

  <script type="text/javascript">
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

  <!--ionicon-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  {{-- <footer class="bg-dark text-center text-lg-start fixed-bottom">
            <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
            </div>
        </footer> --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>

</html>