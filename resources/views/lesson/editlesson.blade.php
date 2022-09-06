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
          <h2>Edit Lesson</h2>
        </div>
        <form action="" class="mt-3">
          <select class="form-select text-center" size="3" aria-label="size 3 select example" >
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <div class="col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
          </div>
        </form>

        <div class="container mt-5 d-flex justify-content-between col-md-10 ">
          <div class="mb-3">
            <label for="file" class="form-label">เลือกไฟล์วิดีโอที่จะอัพโหลด</label>
            <input type="text" name="lesson_name">
            <input class="form-control" type="file" id="file" />
            <button type="submit" class="btn btn-success mt-2">Insert</button>
          </div>
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