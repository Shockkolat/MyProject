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

          <div class="col-md-12 text-end mt-3">
            <a href="{{ route('admin.home') }}" class="btn btn-primary">Back</a>
          </div>
      
            
              {{-- <div class="card-body">
                <div id="upload-container" class="text-center">
                    <button id="browseFile" type="button" class="btn btn-primary mt-3">Browse File</button>
                </div>
                  <div class="progress mt-3" style="height: 25px">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; height: 100%">0%</div>
                  </div>
              </div> --}}
          
          
          <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container mt-4 d-block justify-content-between col-md-4 ">
              
                <input class="form-control " type="text" name="lesson_name" placeholder="ชื่อบทเรียน">
                
                <input class="form-control mt-3" type="file" name="file" >
                <p>
                  @if($errors->has('file'))
                    {{ $errors->first('file') }}
                  @endif
                </p>
                <div class="col-md-12 text-center mt-3">
                  <button type="submit" class="btn btn-success mt-2">Insert</button>
                </div>
                

            </div>
          </form>
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

    {{-- <script type="text/javascript">
      let browseFile = $('#browseFile');
      let resumable = new Resumable({
          target:'{{ route('files.upload.large') }}',
          query:{_token:'{{ csrf_token() }}'} ,// CSRF token
          fileType: ['mp4'],
          headers: {
              'Accept' : 'application/json'
          },
          testChunks: false,
          throttleProgressCallbacks: 1,
          method: 'post',
      });
  
      resumable.assignBrowse(browseFile[0]);
  
      resumable.on('fileAdded', function (file) { // trigger when file picked
          showProgress();
          resumable.upload() // to actually start uploading.
      });
  
      resumable.on('fileProgress', function (file) { // trigger when file progress update
          updateProgress(Math.floor(file.progress() * 100));
      });
  
      resumable.on('fileSuccess', function (file, response) { // trigger when file upload complete
          response = JSON.parse(response)
          $('#videoPreview').attr('src', response.path);
          $('.card-footer').show();
      });
  
      resumable.on('fileError', function (file, response) { // trigger when there is any error
          alert('file uploading error.')
      });
  
  
      let progress = $('.progress');
      function showProgress() {
          progress.find('.progress-bar').css('width', '0%');
          progress.find('.progress-bar').html('0%');
          progress.find('.progress-bar').removeClass('bg-success');
          progress.show();
      }
  
      function updateProgress(value) {
          progress.find('.progress-bar').css('width', `${value}%`)
          progress.find('.progress-bar').html(`${value}%`)
      }
  
      function hideProgress() {
          progress.hide();
      }
  </script> --}}
    
  </body>
  {{-- <footer class="bg-dark text-center text-lg-start fixed-bottom">
    <div
      class="text-center text-light p-3"
      style="background-color: rgba(0, 0, 0, 0.2)"
    >
      @Parada Sarawong 6221601223 Narawit Choeychom 6221608058
    </div>
  </footer> --}}
</html>