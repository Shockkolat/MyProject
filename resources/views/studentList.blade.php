<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

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
              <h2>User List</h2>
            </div>
        <table class="table table-bordered mt-3">
          <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Permission</th>
              {{-- <th width="280px">Action</th> --}}
          </tr>
          @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin }}</td>
                
                    {{-- <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST">
                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-primary">View</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}
                </td>
            </tr>
          @endforeach
        </table>
        {!! $users->links('pagination::bootstrap-5') !!}

        <div class="col-md-12 text-center mt-3">
          <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
        </div>
      </div>
    </div>

    
</body>
<footer class="bg-dark text-center text-lg-start fixed-bottom">
    <div
      class="text-center text-light p-3"
      style="background-color: rgba(0, 0, 0, 0.2)"
    >
      @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
  </footer>
</html>