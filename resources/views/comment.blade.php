<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StatLearning 📚</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />
    <link href="{{ asset('/css/comment.css') }}" rel="stylesheet">

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
          <h2>comments</h2>
          <p class="fs-3">
            ความคิดเห็น
          </p>
        </div>
      </div>
<!-- Start comment-sec Area -->
      <section class="comment-sec-area">
        <div class="container">
          <div class="row flex-column">
            <h5 class="text-uppercase mt-3 mb-3">05 Comments</h5>
            <br />
            @foreach($comments as $comment)
            <!-- Frist Comment -->
            <div class="comment">
              <div class="comment-list">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">
                    <div class="desc">
                      <h5><a href="#" class="link-primary">{{$comment->name}}</a></h5>
                      <p class="date fw-bold">{{$comment->created_at}}</p>
                      <p class="comment">
                        {{$comment->comment}}
                      </p>
                    </div>
                  </div>
                  <div class="">
                    <button class="btn btn-outline-primary text-uppercase" id="reply-btn" 
                      onclick="showReplyForm('1','Emilly Blunt')">reply 1</button
                    >
                  </div>
                </div>
              </div>
              {{-- <div class="comment-list left-padding">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">
                    <div class="desc">
                      <h5><a href="#" class="link-primary">Sally Sally</a></h5>
                      <p class="date fw-bold">December 4, 2017 at 3:12 pm</p>
                      <p class="comment">
                        @Emilly Blunt Never say goodbye till the end comes!
                      </p>
                    </div>
                  </div>
                  <div class="">
                    <button class="btn btn-outline-primary text-uppercase" id="reply-btn" 
                      onclick="showReplyForm('1','Sally Sally')">reply 1</button
                    >
                  </div>
                </div>
              </div> --}}
              {{-- <div class="comment-list left-padding" id="reply-form-1" style="display: none">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">
                    <div class="desc">
                      <h5><a href="#" class="link-primary">Goerge Stepphen</a></h5>
                      <p class="date fw-bold">December 4, 2017 at 3:12 pm</p>
                      <div class="row flex-row d-flex">
                      <form action="#" method="POST">
                        <div class="col-lg-12">
                          <textarea
                            id="reply-form-1-text"
                            cols="60"
                            rows="2"
                            class="form-control mb-10"
                            name="message"
                            placeholder="Messege"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Messege'"
                            required=""
                          ></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-2 mb-4">Reply</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
            @endforeach
            <!-- 2nd Comment 
            <div class="comment">
              <div class="comment-list">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">            
                    <div class="desc">
                      <h5><a href="#" class="link-primary">Emilly Blunt</a></h5>
                      <p class="date fw-bold">December 4, 2017 at 3:12 pm</p>
                      <p class="comment">
                        Never say goodbye till the end comes!
                      </p>
                    </div>
                  </div>
                  <div class="">
                    <button class="btn btn-outline-primary text-uppercase" id="reply-btn" 
                      onclick="showReplyForm('2','Emilly Blunt')">reply 2</button
                    >
                  </div>
                </div>
              </div>
              <div class="comment-list left-padding">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">
                    <div class="desc">
                      <h5><a href="#" class="link-primary">Sally Sally</a></h5>
                      <p class="date fw-bold">December 4, 2017 at 3:12 pm</p>
                      <p class="comment">
                        @Emilly Blunt Never say goodbye till the end comes!
                      </p>
                    </div>
                  </div>
                  <div class="">
                    <button class="btn btn-outline-primary text-uppercase" id="reply-btn" 
                      onclick="showReplyForm('2','Sally Sally')">reply 2</button
                    >
                  </div>
                </div>
              </div>
              <div class="comment-list left-padding" id="reply-form-2" style="display: none">
                <div
                  class="single-comment justify-content-between d-flex"
                >
                  <div class="user justify-content-between d-flex mb-3">
                    <div class="desc">
                      <h5><a href="#" class="link-primary">Goerge Stepphen</a></h5>
                      <p class="date fw-bold">December 4, 2017 at 3:12 pm</p>
                      <div class="row flex-row d-flex">
                        <form action="#" method="POST">
                        <div class="col-lg-12">
                          <textarea
                            id="reply-form-2-text"
                            cols="60"
                            rows="2"
                            class="form-control mb-10"
                            name="message"
                            placeholder="Messege"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Messege'"
                            required=""
                          ></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-2 mb-4">Reply</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            -->
          </div>
        </div>
      </section>
      <!-- End comment-sec Area -->

      <!-- Start commentform Area -->
      <section class="commentform-area pb-120 pt-80 mb-100">
        <div class="container">
          <h5 class="text-uppercase mb-2">Leave a Reply</h5>
          <div class="row flex-row d-flex">
            <div class="col-lg-12">
                <form action="{{route('comment.store')}}" method="POST">
                    @csrf
              <textarea
                class="form-control mb-2 mt-2"
                name="comment"
                placeholder="Messege"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Messege'"
                required=""
              ></textarea>
              <button class="btn btn-primary mt-2 mb-5" type="submit" href="#">
                comment
              </button>
            </form>
            </div>
          </div>
        </div>
      </section>
<!-- End commentform Area -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    function showReplyForm(commentId,user) {
      var x = document.getElementById(`reply-form-${commentId}`);
      var input = document.getElementById(`reply-form-${commentId}-text`);

      if (x.style.display === "none") {
        x.style.display = "block";
        input.innerText=`@${user} `;

      } else {
        x.style.display = "none";
      }
    }

    </script>
  </body>
</html>