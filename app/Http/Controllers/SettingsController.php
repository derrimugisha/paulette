<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\headside;
use App\Models\AboutUs;

class SettingsController extends Controller
{
    public function index(){
        $headside = headside::all()->take('1');
        $aboutus = AboutUs::all()->take('1');
        return view('pages.mysettings')
        ->with('headside',$headside)
        ->with('aboutus',$aboutus);
    }

    public function ChangeSideHeadText(Request $req){
         $text = headside::find(1);
         $req->validate(['title'=>'required',
         'body'=>'required',
         'code'=>'required',]);

          $text->title = $req->input("title");
          $text->body = $req->input("body");
          $text->barcode = $req->input("code");
          $text->save();

          return back()
          ->with('success','Changes have been made');

    }

    public function ChangeAboutUs(Request $req){
        $text = AboutUs::find(1);
        $req->validate([
        'body'=>'required',
        ]);
         $text->body = $req->input("body");
         $text->save();
         return back()
         ->with('success','Changes have been made');

   }
}
