<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Myfiles;
use App\Models\headside;
use App\Models\AboutUs;
use App\Models\FooterContacts;
use App\Models\RatingTable;

class TesterController extends Controller
{
    public function Test1(){
        // $sum = Model::sum('sum_field')
        // $sum = Model::where->('status','=','paid')->sum('sum_field')
        // $books = RatingTable::sum('rating');
        // $book = RatingTable::select("*")
        // ->where('postid',16)->sum('rating');
        // return $book;

        $books = Myfiles::paginate(10);
        $aa = RatingTable::all();

        foreach($books as $b){

          $ba= $b->id;
          $rates = $aa->where('postid',$ba)->sum('rating');
          return $rates;

        }

        return;

    }
    public function Test2(){
        $user = Auth::user();
           if(!$user){

           
              return view('auth.login');
           }
        return $user;
    }
}
