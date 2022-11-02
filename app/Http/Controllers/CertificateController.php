<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\User;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Support\Facades\Storage;
use Session;

class CertificateController extends Controller
{
    // public function getCertificate(Request $request)
    // {   
    //     if (Result::where('total_points','>','5')){
            
            
    //         $name = Auth::user()->name; 
    //         $outputfile = public_path().'dcc.pdf';
    //         $outputfile->move(public_path('cert'),$name);

    //         return response()->file($outputfile);
    //     }   
    //     else{
    //         return redirect()->back() ->with('alert', 'คะแนนคุณยังไม่ผ่าน กรุณาสอบใหม่!');
    //     }

        
    // }

    public function fillPDF()
    {   
        $i  = Result::select('total_points')->where('user_id', Auth::user()->id)->latest('id')->first() ;
        
        $r  = Question::select('id')->get()->count() ;

        $pass = $r * 70/100 ;

        if($i === NULL){
            return redirect()->back()->with('alert' , 'คุณยังไม่ได้สอบ กรุณาไปทำการสอบก่อนนะ !');
            }
        else if ($i->total_points < $pass){
            return redirect()->back()->with('alert' , 'คะแนนคุณยังไม่ผ่านเกณฑ์ กลับสอบใหม่นะ !');
            
        }
        else{
            $fpdf = new Fpdf ('L','mm','A4');
            $fpdf -> AddPage();
            $fpdf->SetFont('Courier','',26);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->Image(public_path('images\certificate.jpg'),0,0,300,220);
            $name = Auth::user()->name;
            $fpdf->Cell(0, 160, $name, 0, 0, 'C');
            $fpdf->Output();
        }
    }
}
