@extends('layouts.admin')
<style>
    .card-header{
        margin-right: 15rem;
        margin-top: 15rem
    }
</style>
@section('content')
{{-- <link href="{{ asset('/css/adminhome.css') }}" rel="stylesheet"> --}}


        <nav id="sidebar" class="col-md-2 col-lg-2 d-md-block sidebar collpase">
            <div class="position-sticky">
                <ul class="nav flex-column ms-1">
                    <li class="nav-item">
                        <a href="/admin/home" class="nav-link" aria-current="page">
                            <i data-feather="home"></i>
                            <span class="ml-2 ms-2">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="studentlist" class="nav-link" aria-current="page">
                            <i data-feather="user"></i>
                            <span class="ml-2 ms-2 ">Student List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="comment" class="nav-link" aria-current="page">
                            <i data-feather="message-circle"></i>
                            <span class="ml-2 ms-2">Talk with Student</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="commentmanage" class="nav-link" aria-current="page">
                            <i data-feather="bar-chart-2"></i>
                            <span class="ml-2 ms-2">Manage Comment & Reply</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="lessons/editlesson" class="nav-link" aria-current="page">
                            <i data-feather="book-open"></i>
                            <span class="ml-2 ms-2">Edit lessons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="documents/editdocument" class="nav-link" aria-current="page">
                            <i data-feather="layers"></i>
                            <span class="ml-2 ms-2">Edit Document</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="exams/index" class="nav-link" aria-current="page">
                            <i data-feather="trending-up"></i>
                            <span class="ml-2 ms-2">Edit Exam</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>




<div class="container">
    <div class="row justify-content-center">
        <div class="insert col-md-8">
            <div class="board card-header mb-10 text-center">
                <h1 class="fw-bold">{{ ('Hello Admin.') }}</h1>
                <h3>Welcome to StatLearning</h3>
            </div>
        </div>
    </div>
</div>

<footer class=" bg-dark text-center text-lg-start fixed-bottom">
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
</footer>

<script>
    feather.replace()
</script>

@endsection