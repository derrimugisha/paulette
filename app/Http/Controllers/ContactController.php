<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\emails;
use App\Models\PhoneNumbers;
use App\Mail\SubscriberMail;
use App\Mail\UserMail;
class ContactController extends Controller
{
    public function index(){
        $emails = emails::paginate(10);
        $phonenumbers = PhoneNumbers::paginate(10);
        return view('pages.subscribers')->with('emails',$emails)
        ->with('phone',$phonenumbers);
    }
    public function storeEmail(Request $request){
        // $this->validate($request,['email'=>'required']);

        $toemail = $request->emailaddress;
        $email = new emails;
        $email->email = $request->emailaddress;
        $data = ['subscriber'=>$email];
        $data2 = ['message'=>''];
        $email->save();
        Mail:: to('derrimugisha@gmail.com')->send(new SubscriberMail($data));
        Mail:: to($toemail)->send(new UserMail($data2));
        // return redirect('/')->with('success','Your email has been saved!');
        return response()->json();
    }

    public function storephone(Request $request){
        // $this->validate($request,['phone'=>'required']);
        $phone= $request->phonenumber;
        $data = ['subscriber'=>$phone];
        $phone = new PhoneNumbers;
        $phone->phonenumber = $request->phonenumber;
        $phone->save();
        // Mail:: to('derrimugisha@gmail.com')->send(new SubscriberMail($data));
        // return redirect('/')->with('success','Your phone number has been saved!');
        return response()->json();
    }

}
