<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use PhpParser\Node\Expr\FuncCall;


class LessonController extends Controller
{

    


    // Create Index
    public function editlesson() {
        $data ['lessons'] = Lesson::orderBy('id', 'asc')->paginate(3);
        return view('lessons.editlesson', $data);
    }

    // Store resource
    public function store(Request $request){
        $request->validate([
            'lesson_name' => 'required',
            'file' => 'required',
        ]);

    
        $lesson_name = $request->lesson_name;
        $file = $request->file('file');
        $filename=rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('video'),$filename);
        $form_data = array(
            'file' => $filename,
            'lesson_name' => $request->input('lesson_name')
        );

        Lesson::create($form_data);
        return redirect()->route('admin.lessons.editlesson')->with('success', 'Lesson has been added !');

    }

    public function show(Lesson $lesson){
         $data = Lesson::find($lesson);
        return view('lessons.viewlesson', compact('lesson'));
    }

    public function destroy(Lesson $lesson){
       
        

        $file_name = $lesson->file;
        $file_path = public_path('video/'. $file_name);
        unlink($file_path);


        $lesson->delete();
        return redirect()->route('admin.lessons.editlesson')->with('success', 'Lesson has been deleted !');
    }


}
