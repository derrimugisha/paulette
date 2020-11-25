<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\emails;
use App\Models\PhoneNumbers;

class ContactController extends Controller
{
    public function index(){
        $emails = emails::paginate(10);
        $phonenumbers = PhoneNumbers::paginate(10);
        return view('pages.subscribers')->with('emails',$emails)
        ->with('phone',$phonenumbers);
    }
    public function storeEmail(Request $request){
        $this->validate($request,['email'=>'required']);
        $email = new emails;
        $email->email = $request->input('email');
        $email->save();
        return redirect('/')->with('success','Your email has been saved!');
    }

    public function storephone(Request $request){
        $this->validate($request,['phone'=>'required']);
        $phone = new PhoneNumbers;
        $phone->phonenumber = $request->input('phone');
        $phone->save();
        return redirect('/')->with('success','Your phone number has been saved!');
    }

}
