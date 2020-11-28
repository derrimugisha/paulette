<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CheckOutMail;

class CheckOutMailer extends Controller
{
    public function sendEmail(){
        $data= [
           'phonenumber'=>'0770000000'
        ];
        Mail::to('derrimugisha@gmail.com')->send(new CheckOutMail($data));
    }
}
