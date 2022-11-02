<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand"><span>Stat</span>Learning</a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h2>Edit Username</h2>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ sesion('status') }}
            </div>
            @endif

            <p class="text-center mt-3">Present Username is <strong class="text-center">{{ $names->name }}</strong></p> 
            <form action="{{ route('admin.editusername.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row ">
                    <div class=" mt-3 text-center">
                        <strong>Name</strong>
                        <div class="form-group d-grid gap-2 col-4 mx-auto">
                            <input type="text" name="name" value="{{ $users->name }}" class="col-12 form-control mt-3  " placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="mt-3 btn btn-success ">Submit</button>
                </div>
            </form>
            <div class="col-md-12 text-end mt-3">
                <a href="{{ route('admin.studentList') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

</body>

</html>