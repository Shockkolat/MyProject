@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />

    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #212529;
        }

        .register {
            margin-top: 10px;
            width: 360px;
            height: min-content;
            padding: 20px;
            border-radius: 12px;
            background: #ffffff;
        }

        .register h1 {
            font-size: 30px;
            margin-bottom: 25px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .register form {

            font-size: 15px;
        }

        .register form .form-group {
            margin-bottom: 12px;
        }

        .register form input[type="submit"] {
            font-size: 20px;
            margin-top: 15px;
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
    <div class="register">
        <h1 class="text-center">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="form-label">{{ __('Name :') }}</label>

                <div class="col-md-13">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="form-label">{{ __('Email Address :') }}</label>

                <div class="col-md-13">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="form-label">{{ __('Password :') }}</label>

                <div class="col-md-13">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password :') }}</label>

                <div class="col-md-13">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-13 text-center">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Register') }}
                    </button>

                    <a href="{{ route('admin.home') }}" class="btn btn-primary  mt-3">Back</a>
                </div>
                    
            </div>
        </form>
    </div>
</body>
@endsection