@extends('layouts.client')

@section('content')

<style>
    .padd{
        margin-top: 6rem
    }

</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="padd">
                <div class="content mt-5">
                    <div class="thing mt-5 mb-3 text-center">
                      <h2 class="fw-bold">Results of your examination</h2>
                    </div>
                  </div>

                <div>
                    <p class="mt-5">Total points: {{ $result->total_points }} points</p>
                    @if($result->total_points  < 7)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>คุณสอบไม่ผ่าน กรุณาทบทวนเนื้อหาและกลับมาสอบใหม่ !</strong> {{ session('error') }}

                        </div>
                    @else
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>คุณสอบผ่านแล้ว รับใบรับรองได้เลย!</strong> {{ session('success') }}

                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                                <tr>
                                    <td>{{ $question->question_text }}</td>
                                    <td>{{ $question->pivot->points }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-group row mb-2 mt-4">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a type="button" class="btn btn-primary" href={{route('result')}}> 
                            {{ __('Go Back') }}
                        </a>
                      </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection