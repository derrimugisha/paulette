<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Myfiles;
use App\Models\headside;
use App\Models\AboutUs;
use App\Models\FooterContacts;
use App\Models\RatingTable;
use App\Models\SubscriberSection;

class PagesController extends Controller
{
    public function index(){
        $books = Myfiles::paginate(10);
        $headside = headside::all()->take('1');
        $aboutus= AboutUs::all()->take('1');
        $footercontent= FooterContacts::all();
        $subscribersection = SubscriberSection::all();
        $AllRates = RatingTable::all();
        return view('pages.index')
        ->with('books',$books)
        ->with('headside',$headside)
        ->with('aboutus',$aboutus)
        ->with('footercontent',$footercontent)
        ->with('subscribersection',$subscribersection)
        ->with('Myrates',$AllRates);
    }

    public function edit($id){
        $books = Myfiles::find($id);
        return view('pages.edit')->with('books',$books);
    }

    public function update(Request $req,$id){
        $books = Myfiles::find($id);
        // $req->validate([
        //     'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        //     ]);



            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

               $books->name = time().'_'.$req->file->getClientOriginalName();
               $books->file_path = '/storage/' . $filePath;
               $books->book_name = $req->input('bookname');
               $books->details = $req->input('details');
               $books->issue = $req->input('issue');
               $books->panner = $req->input('banner');
               $books->price = $req->input('price');
               $books->subdetails = $req->input('subdetails');
               $books->save();

                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }

               $books->book_name = $req->input('bookname');
               $books->details = $req->input('details');
               $books->issue = $req->input('issue');
               $books->panner = $req->input('banner');
               $books->price = $req->input('price');
               $books->subdetails = $req->input('subdetails');
               $books->save();

                return back()
                ->with('success','File has been uploaded.');
        // return redirect('dashboard')->with('success',$books->book_name. ' Updated Updated');

}
   public function destroy($id)
   {
       $books = Myfiles::find($id);

       $books->delete();
       return redirect('dashboard')->with('success',$books->book_name.'has been deleted from the store');
   }
}
