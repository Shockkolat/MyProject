<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StatLearning 📚</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300&display=swap" rel="stylesheet" />
    <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">

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
                <h2 class="mt-3">Reply management</h2>
            </div>
            {{-- Reply Zone --}}
            <table class="table table-bordered mt-3">
                <tr>
                    <th>No.</th>
                    <th>user_id</th>
                    <th>Name</th>
                    <th>reply</th>

                    <th width="280px">Action</th>
                </tr>
                @foreach($replies as $reply)
                <tr>
                    <td>{{ $reply->id }}</td>
                    <td>{{ $reply->user_id }}</td>
                    <td>{{ $reply->name }}</td>
                    <td>{{ $reply->reply }}</td>
                    <td>
                        <form action="{{ route('replies.destroy', $reply->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
                </table>
                {!! $replies->links('pagination::bootstrap-5') !!}
                <div class="text-end">
                    <a href="{{ route('admin.commentmanage') }}" class="btn btn-primary mb-5">Back</a>
                </div>
        </div>
    </div>
    </main>