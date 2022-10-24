<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{   
    public function index() {
        $data ['comments'] = Comment::orderBy('id', 'asc')->paginate(10);
        return view('comment', $data);
    }

    public function manage() {
        $data ['comments'] = Comment::orderBy('id', 'asc')->paginate(10);
        return view('commentmanage', $data);
    }

    public function adminindex() {
        $data ['comments'] = Comment::orderBy('id', 'asc')->paginate(10);
        return view('adminComment', $data);
    }
    

    public function store(Request $request)
    {
        $this->validate($request, ['comment' => 'required|max:1000']);
        $comment = new Comment();
        // $comment->id = $comment;
        $comment->name = Auth::user()->name ;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();


        //Success message
        return redirect()->route('comment')->with('success', 'Comment has been created successfully.');


    }

    public function adminstore(Request $request)
    {
        $this->validate($request, ['comment' => 'required|max:1000']);
        $comment = new Comment();
        // $comment->id = $comment;
        $comment->name = Auth::user()->name ;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();


        //Success message
        return redirect()->route('admin.comment')->with('success', 'Comment has been created successfully.');


    }

    public function show(Comment $comment){
        $data = Comment::all();
        return view('comment', compact('comment'));
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('admin.commentmanage')->with('success', 'Comment has been deleted successfully.');
    }


    
}
