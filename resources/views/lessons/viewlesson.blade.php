<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stat Learning Index</title>
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
            <h2>View Lesson</h2>
          </div>

          <td>{{ $lesson->id }}</td>
          <td>{{ $lesson->lesson_name }}</td>
          <td> <iframe height="400" width="400" src="/video/{{ $lesson->file }}" frameborder="1"></iframe></td>

          <div class="col-md-12 text-center mt-3">
            <a href="{{ route('admin.lessons.editlesson') }}" class="btn btn-primary">Back</a>
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