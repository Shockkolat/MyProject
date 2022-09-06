<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StatLearning 📚</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />


    <style>
        * {
            font-family: 'Kanit', sans-serif;
            ;
        }

        .navbar-nav a {
            font-size: 15px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;

        }

        .navbar-dark .navbar-brand {
            color: white;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;

        }

        .navbar-dark .navbar-brand span {
            color: #1977cc;
        }

        .w-100 {
            height: 100vh;
        }

        .navbar-toggler {
            padding: 1px 5px;
            font-size: 18px;
            line-height: .3;

        }

        .content {
            display: grid;
            place-items: center;
            height: 100vh;
            text-align: center;
        }

        .content h2 {
            text-transform: uppercase;
            font-weight: 900;
            font-size: 60px;
        }

        .content p {
            width: 60%;
            margin: auto;
            font-size: 20px;
        }

        @media only screen and (max-width: 767px) {
            .navbar-nav {
                text-align: center
            }

            .carousel-caption {
                bottom: 165px
            }

            .carousel-caption h5 {
                font-size: 16px
            }

            .carousel-caption a {
                padding: 10px 15px;
                font-size: 14px
            }

            .navbar .appbtn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand"><span>Stat</span>Learning</a>
            <button class="navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb- mb-lg-0">
                        
                        @auth
                        
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Signup</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ ('/aboutus') }}">About us</a>
                        </li>
                        @endauth
                    </ul>
                
            </div>
            @endif
        </div>
    </nav>
    <div class="content">
        <div class="thing">
            <h2>StatLearning</h2>
            <p>
                เป็นคนไม่ค่อยฝัน เพราะว่าฉันไม่ค่อยนอน จะไม่มีคำว่าสาย ถ้าเราตื่นบ่าย
            </p>
        </div>
    </div>
    <!-- -->
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
</body>

</html>