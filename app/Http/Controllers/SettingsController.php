<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\headside;
use App\Models\AboutUs;
use App\Models\FooterContacts;
use App\Models\SubscriberSection;

class SettingsController extends Controller
{
    public function index(){
        $user = Auth::user();
        if(!$user){
           return view('auth.login');
        }
        $headside = headside::all()->take('1');
        $aboutus = AboutUs::all()->take('1');
        $subscribersection = SubscriberSection::all()->take('1');
        $footercontacts = FooterContacts::all();
        return view('pages.mysettings')
        ->with('headside',$headside)
        ->with('aboutus',$aboutus)
        ->with('subscribersection',$subscribersection)
        ->with('footercontacts',$footercontacts);
    }

    public function ChangeSideHeadText(Request $req){
        $user = Auth::user();
        if(!$user){
           return view('auth.login');
        }
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
        $user = Auth::user();
        if(!$user){
           return view('auth.login');
        }
        $text = AboutUs::find(1);
        $req->validate([
        'body'=>'required',
        ]);
         $text->body = $req->input("body");
         $text->save();
         return back()
         ->with('success','Changes have been made');

   }

   public function updatefc(Request $req,$id){
         $user = Auth::user();
         if(!$user){
            return view('auth.login');
         }
         $footerC = FooterContacts::find($id);
         $req->validate([
         'phone1'=>'required',
         ]);
          $footerC->phone1 = $req->input("phone1");
          $footerC->phone2 = $req->input("phone2");
          $footerC->email = $req->input("email");
          $footerC->address = $req->input("address");
          $footerC->save();
          return back()
          ->with('success','Changes to footer have been made');
        }

    public function updatesubscribersection(Request $req){
        $user = Auth::user();
        if(!$user){
        return view('auth.login');
         }
        $subscriber_msg = SubscriberSection::find(1);
         $subscriber_msg->email_msg = $req->input("emailmessage");
         $subscriber_msg->mobile_msg = $req->input("mobilemessage");
         $subscriber_msg->save();
         return back()
         ->with('success','Changes to footer have been made');
       }

    public function addFootterContent(Request $req){
        $user = Auth::user();
        if(!$user){
           return view('auth.login');
        }
         $orders = new FooterContacts;
         $orders->phone1 = $req->input("phone1");
         $orders->phone2 = $req->input("phone2");
         $orders->email = $req->input("email");
         $orders->address = $req->input("address");
         $orders->save();
         return back()
         ->with('success','Contact information has been added');
    }

    public function deleteFc($id){
        $user = Auth::user();
        if(!$user){
           return view('auth.login');
        }
        $orders = FooterContacts::find($id);
        $orders->delete();
        return back()
        ->with('success','Contact Information has been Deleted');
    }
}
