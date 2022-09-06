<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stat Learning Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand"><span>Stat</span>Learning</a>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h2>Edit Examination</h2>
            </div>
            <div>
                <a href="{{ route('exams.create') }}" class="btn btn-success">Create Question</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered mt-3">
                <tr>
                    <th>No.</th>
                    <th>hash</th>
                    <th>Question</th>
                    <th>option1</th>
                    <th>option2</th>
                    <th>option3</th>
                    <th>option4</th>
                    <th>correct</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($exams as $exam)
                <tr>
                    <td>{{ $exam->id }}</td>
                    <td>{{ $exam->hash }}</td>
                    <td>{{ $exam->question }}</td>
                    <td>{{ $exam->option1 }}</td>
                    <td>{{ $exam->option2 }}</td>
                    <td>{{ $exam->option3 }}</td>
                    <td>{{ $exam->option4 }}</td>
                    <td>{{ $exam->correct }}</td>
                    <td>
                        <form action="{{ route('exams.destroy', $exam->id) }}" method="POST">
                            <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $exams->links('pagination::bootstrap-5') !!}
        </div>
        <div>
            <a href="{{ route('admin.home') }}" class="btn btn-primary mb-5">Back</a>
        </div>
    </div>

</body>
<footer class=" bg-dark text-center text-lg-start position-absolute-buttom">
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
</footer>

</html>