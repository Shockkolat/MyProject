<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{   
    public function index() {
        $data ['comments'] = Comment::orderBy('id', 'asc')->paginate(5);
        return view('commentmanage', $data);
    }




    public function store(Request $request)
    {
        $this->validate($request, ['comment' => 'requied|max:1000']);
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();


        //Success message
        return redirect()->route('comment')->with('success', 'Comment has been created successfully.');


    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('admin.commentmanage')->with('success', 'Comment has been deleted successfully.');
    }


    
}
