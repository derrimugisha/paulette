<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingTable;

class RatingController extends Controller
{
    public function store(Request $req){
     $rates = new RatingTable();
     $message = array('msg'=>'Thank you, Your Rating is Submited');
     $rates->postid = $req->bookid;
     $rates->writer = $req->body;
     $rates->header = $req->header;
     $rates->rating = $req->star;
     $rates->user = "";
     $rates->save();

     return response()->json($message);

    }
}
