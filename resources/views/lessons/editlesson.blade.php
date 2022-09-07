<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stat Learning Edit Lesson</title>
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
          <h2>Edit Lesson</h2>
        </div>
        
            <table class="table table-bordered mt-3">
              <tr>
                  <th>Lesson id</th>
                  <th>Lesson Name</th>
                  <th>File</th>
                  <th width="280px">Action</th>
              </tr>
              @foreach($lessons as $lesson)
              <tr>
                  <td>{{ $lesson->id }}</td>
                  <td>{{ $lesson->lesson_name }}</td>
                  <td>{{ $lesson->file }}</td>
                  <td>
                      <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST">
                          <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-primary">View</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </table>

          {!! $lessons->links('pagination::bootstrap-5') !!}

            @if ($message = Session::get('success'))
            <div class="alert alert-success text-center h-50">
                 <p>{{ $message }}</p>
             </div>
            @endif

          <div class="col-md-12 text-center mt-3">
            <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
          </div>
        
          <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container mt-4 d-block justify-content-between col-md-4 ">
              
                <input class="form-control " type="text" name="lesson_name" placeholder="ชื่อบทเรียน">
                {{-- <label for="file" class="form-label">เลือกไฟล์วิดีโอที่จะอัพโหลด</label> --}}
                <input class="form-control mt-3" type="file" name="file" >

                <div class="col-md-12 text-center mt-3">
                  <button type="submit" class="btn btn-success mt-2">Insert</button>
                </div>
                

            </div>
          </form>
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