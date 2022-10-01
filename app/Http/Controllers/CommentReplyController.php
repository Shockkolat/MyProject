<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentReplyController extends Controller
{    

    public function manage() {
        $data ['replies'] = CommentReply::orderBy('id', 'asc')->paginate(5);
        return view('replymanage', $data);
    }

    public function store(Request $request,$comment)
    {
        $this->validate($request, ['reply' => 'required|max:1000']);
        $commentreply = new CommentReply();
        $commentreply->comment_id = $comment;
        $commentreply->name = Auth::user()->name ;
        $commentreply->user_id = Auth::id();
        $commentreply->reply = $request->reply;
        $commentreply->save();


        //Success message
        return redirect()->route('comment')->with('success', 'Reply has been created successfully.');


    }

    public function adminstore(Request $request,$comment)
    {
        $this->validate($request, ['reply' => 'required|max:1000']);
        $commentreply = new CommentReply();
        $commentreply->comment_id = $comment;
        $commentreply->name = Auth::user()->name ;
        $commentreply->user_id = Auth::id();
        $commentreply->reply = $request->reply;
        $commentreply->save();


        //Success message
        return redirect()->route('adminComment')->with('success', 'Reply has been created successfully.');


    }

    public function destroy(CommentReply $reply){
        $reply->delete();
        return redirect()->route('admin.replymanage')->with('success', 'Reply has been deleted successfully.');
    }
}
