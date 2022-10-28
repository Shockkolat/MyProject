<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientResultController extends Controller
{
    public function show($result_id){
        
        $i  = Result::select('total_points')->where('user_id', Auth::user()->id)->latest('id')->first() ;

        $result = Result::whereHas('user', function ($query) {
            $query->whereId(auth()->id());
        })->findOrFail($result_id);
    
        if($i->total_points < 7){
            return view('exams.results', compact('result'))->with('alert' , 'คุณยังสอบไม่ผ่าน กรุณาสอบใหม่เพื่อรับใบรับรอง');
        }
        else{
            return view('exams.results', compact('result'))->with('alert' , 'ยินดีด้วยคุณสอบผ่านแล้ว สามารถรับใบรับรองได้เลย !');
        }
        
    }
}
