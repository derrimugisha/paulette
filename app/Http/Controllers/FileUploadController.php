<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myfiles;

class FileUploadController extends Controller
{
    public function index(){
        return view('file-upload');
    }

    public function store(Request $req)
    {

        // $validatedData = $request->validate([
        //  'file' => 'required|mimes: csv,txt,xlx,xls,pdf|max:2048',

        // ]);

        // $name = $request->file('file')->getClientOriginalName();

        // $path = $request->file('file')->store('public/files');


        // $save = new File;

        // $save->name = $name;
        // $save->path = $path;

        // return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
        $req->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $fileModel = new Myfiles;

            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->book_name = $req->input('bookname');
                $fileModel->details = $req->input('details');
                $fileModel->issue = $req->input('issue');
                $fileModel->panner = $req->input('banner');
                $fileModel->price = $req->input('price');
                $fileModel->subdetails = $req->input('subdetails');
                $fileModel->save();

                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
    }

    public function edit($id){

        $book = Myfiles::find($id);

        return view('edit')->with('book',$post);

    }
}
