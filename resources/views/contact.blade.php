<!DOCTYPE html>
<html lang="en">
  <!--divinectorweb.com-->
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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

    <link href="{{ asset('/css/contact.css') }}" rel="stylesheet">

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
      <h2>Contact</h2>
      <p>
        ติดต่อเรา
      </p>
    </div>
  </div>
  <div class="d-flex justify-content-center">
        <div id="map-container-google-1" class="map-container mt-4 ms-2 pe-5 " style="height: 500px">
          <iframe class="border border-3"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3870.959494250312!2d99.9918315!3d14.0204154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2f1342d04d6e1%3A0x6111c6e4245323b9!2z4LmB4Lih4LmA4LiZ4Lit4Lij4LmMIOC4iuC4oeC4oOC4ueC4nuC4h-C4qOC5jA!5e0!3m2!1sen!2sth!4v1663143051920!5m2!1sen!2sth"  
            style="border:0;" 
            allowfullscreen="" 
            width="900"
            height="650"
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <div class="info">
          <h2 class="fw-bolder fs-5 mb-3">ข้อมูลติดต่อ</h2>
          <p class="information-info  mb-4 mt-4 pe-5">
            โทรศัพท์ : 087-768-4003 (เดียว)<br />
            ที่อยู่ : หอพักเเมเนอร์ชมภูพงศ์ 107 หมู่ 12 ตำบล กำแพงแสน <br />
            อำเภอ กำแพงแสน จังหวัด นครปฐม  73140 <br />
            Email : daewtoy@gmail.com <br />
          </p>

          <h2 class="fw-bolder fs-5 mb-3">มีคำถามหรือคำแนะนำสามารถบอกเราได้ด้านล่าง</h2>
          <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address :</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Your name :</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Firstname  Lastname">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Topic :</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="abcde">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Comments :</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mt-3">
              <button class="btn btn-success mb-2" type="button">
                Send
              </button>
            </div>
          </form>
                  
      </div>
              
  </div>
  
  <!-- 
    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
        </div>
    </footer>
    -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>
</html>