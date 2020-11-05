<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Myfiles;

class PagesController extends Controller
{
    public function index(){
        $books = Myfiles::all()->take('10');
        return view('pages.index')->with('books',$books);
    }

    public function edit($id){
        $books = Myfiles::find($id);
        return view('pages.edit')->with('books',$books);
    }

    public function update(Request $request,$id){
        $books = Myfiles::find($id);

        $books->book_name = $request->input('bookname');
        $books->details = $request->input('details');
        $books->issue = $request->input('issue');
        $books->panner = $request->input('banner');
        $books->price = $request->input('price');
        $books->subdetails = $request->input('subdetails');
        $books->save();
        return redirect('dashboard')->with('success',$books->book_name. ' Updated Updated');

}
   public function destroy($id)
   {
       $books = Myfiles::find($id);

       $books->delete();
       return redirect('dashboard')->with('success',$books->book_name.'has been deleted from the store');
   }
}
