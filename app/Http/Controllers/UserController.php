<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   

    public function list(){
        
        $data ['users'] = User::orderBy('id', 'asc')->paginate(10);
        
        return view('studentList', $data);

    }

    public function edit($id){
        
        $user = User::select('id')->where('id', $id)->first();
        $name = User::select('name')->where('id', $id)->first();

        return view('usernameEdit')->with(['users'=>$user,'names'=>$name]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required'
        ]);
        $user = User::find($id);
        $user->name = $request->name;

        $user->save();
        return redirect()->route('admin.studentList')->with('success', 'Username has been updated successfully.');
    }
}
