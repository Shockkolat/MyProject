<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Exam;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ExamCRUDController extends Controller
{
    // Create Index
    public function index() {
        $data ['exams'] = Exam::orderBy('id', 'asc')->paginate(5);
        return view('exams.index', $data);
    }

    // Create resource
    public function create() {
        return view('exams.create');
    }

    // Store resource
    public function store(Request $request){
        $request->validate([
            'hash' => 'required',
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'correct' => 'required'
        ]);

    

        $exam = new Exam;
        $exam->hash = $request->hash;
        $exam->question = $request->question;
        $exam->option1 = $request->option1;
        $exam->option2 = $request->option2;
        $exam->option3 = $request->option3;
        $exam->option4 = $request->option4;
        $exam->correct = $request->correct;
        $exam->save();
        return redirect()->route('exams.index')->with('success', 'Question has been created successfully.');

    }

    public function edit(Exam $exam){
        return view('exams.edit', compact('exam'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'hash' => 'required',
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'correct' => 'required'
        ]);
        $exam = Exam::find($id);
        $exam->hash = $request->hash;
        $exam->question = $request->question;
        $exam->option1 = $request->option1;
        $exam->option2 = $request->option2;
        $exam->option3 = $request->option3;
        $exam->option4 = $request->option4;
        $exam->correct = $request->correct;
        $exam->save();
        return redirect()->route('exams.index')->with('success', 'Question has been updated successfully.');
    }

    public function destroy(Exam $exam){
        $exam->delete();
        return redirect()->route('exams.index')->with('success', 'Question has been deleted successfully.');
    }
}
