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
}
