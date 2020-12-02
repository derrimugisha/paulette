<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

use App\Mail\CheckOutMail;

use App\Models\order;

class OrdersController extends Controller
{
    public function index(){
        $order = order::orderBy('updated_at','desc')->get();
        return view('pages.myorders')->with('orders',$order);
    }
    public function store(Request $request){
        $this->validate($request,[

             'phone'=>'required',
             'paymentmethod'=>'required',
             'quantity'=>'required',
             'price'=>'required',

        ]);
        $data = [
            'name' => "",
            'verification_code' => ""
        ];
        $order = new order;
        // $order->email = $request->input('email');
        // $order->country = $request->input('country');
        // $order->district = $request->input('district');
        $order->phone = $request->phone;
        // $order->streetaddress = $request->input('streetaddress');
        // $order->apartmentaddress = $request->input('apartmentaddress');
        $order->paymentmethod = $request->paymentmethod;
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        $order->booknameid = $request->id;
        $order->deliveryaddress = $request->deliveryaddress;
        $order->save();

        // Mail::to('derrimugisha@gmail.com')->send(new CheckOutMail($data));

        return response()->json();

    }

    public function getNewOrder()
    {
           $order = order::where('order_status','not read')->count();
            $output = order::where('order_status','not read')->get();
            $mydata = array('notification'=>$output,
            'unseen_notification'=>$order);
        //    return $mydata;
        echo json_encode($mydata);
    }

    public function seeorders(Request $req,$id){
        $orders = order::find($id);
        $updater = 'seen';
        $orders->order_status= $updater;
        $orders->save();
        $orderbox = order::orderBy('created_at','desc')->get();
        return view('pages.myorders')
        ->with('orders',$orderbox)
        ->with('seeorders',$orders);
    }

    public function allorders(){
        $user= $user = Auth::user();
        if(!$user){
            return view('auth.login');
        }
        $orders = order::orderBy('created_at','desc')->paginate(10);
        return view('pages.allorders')->with('orders',$orders);
    }
}
