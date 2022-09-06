<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Edit Question</h2>
            </div>
            <div>
                <a href="{{ route('exams.index') }}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ sesion('status') }}
                </div>
            @endif  
            <form action="{{ route('exams.update', $exam->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Hash</strong>
                            <input type="text" name="hash" value="{{ $exam->hash }}" class="form-control" placeholder="Hash">
                            @error('hash')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Question</strong>
                            <input type="text" name="question" value="{{ $exam->question }}" class="form-control" placeholder="Question">
                            @error('question')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Option1</strong>
                            <input type="text" name="option1" value="{{ $exam->option1 }}" class="form-control" placeholder="Option1">
                            @error('option1')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Option2</strong>
                            <input type="text" name="option2" value="{{ $exam->option2 }}" class="form-control" placeholder="Option2">
                            @error('option2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Option3</strong>
                            <input type="text" name="option3" value="{{ $exam->option3 }}" class="form-control" placeholder="Option3">
                            @error('option3')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Option4</strong>
                            <input type="text" name="option4" value="{{ $exam->option4 }}" class="form-control" placeholder="Option4">
                            @error('option4')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Correct</strong>
                            <input type="number" name="correct" class="form-control" placeholder="correct">
                            @error('correct')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>  
        </div>
    </div>

</body>
</html>