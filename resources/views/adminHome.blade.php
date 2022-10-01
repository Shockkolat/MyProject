@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mt-5">

                <div class="card-header mb-10 text-center">
                    <h2>{{ ('Hello Admin.') }}</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="col-md-12 text-center mt-2">

                        <a class="btn btn-success" href="lessons/editlesson" role="button">Edit Lesson</a>
                        <a class="btn btn-warning" href="studentlist" role="button">Student List</a>
                        <a class="btn btn-primary" href="comment" role="button">Talk with Student</a>
                        <a class="btn btn-primary" href="commentmanage" role="button">Manage Comment & Reply</a>
                        <a class="btn btn-danger" href="documents/editdocument" role="button">Edit Document</a>
                        <a class="btn btn-dark" href="exams/index" role="button">Edit Exam</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>

<footer class=" bg-dark text-center text-lg-start fixed-bottom">
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
</footer>



@endsection