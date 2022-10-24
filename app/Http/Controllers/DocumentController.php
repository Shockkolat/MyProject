<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use PhpParser\Node\Expr\FuncCall;
use Response;


class DocumentController extends Controller
{
    
    
    
    
    // Create Index
    public function editdocument() {
        $data ['documents'] = Document::orderBy('id', 'asc')->paginate(3);
        return view('documents.editDocument', $data);
    }

    // Store resource
    public function store(Request $request){
        $request->validate([
            'document_name' => 'required',
            'file' => 'required',
        ]);

    
        $document_name = $request->document_name;
        $file = $request->file('file');
        $filename=rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('doc'),$filename);
        $form_data = array(
            'file' => $filename,
            'document_name' => $request->input('document_name')
        );

        Document::create($form_data);
        return redirect()->route('admin.documents.editDocument')->with('success', 'Document has been added !');

    }

    public function show(Document $document){
        //  $data = Document::find($document);
        // // return view('documents.viewDocument', compact('document'));
        $file_name = $document->file;
        $file_path = public_path('doc/'. $file_name);

        return response()->file($file_path);

    }

    public function destroy(Document $document){
       
        

        $file_name = $document->file;
        $file_path = public_path('doc/'. $file_name);
        unlink($file_path);


        $document->delete();
        return redirect()->route('admin.documents.editDocument')->with('success', 'Document has been deleted !');
    }

    public function getDownload(){
        
    // $file_name = Document::where('document_name','=',.302064512)->get();

    $file_path = public_path('doc/302064512.pdf');

    return Response::download($file_path);
    }
}
