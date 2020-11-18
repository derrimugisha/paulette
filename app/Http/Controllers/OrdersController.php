<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;

class OrdersController extends Controller
{
    public function index(){
        $order = order::orderBy('updated_at','desc')->get();
        return view('pages.myorders')->with('orders',$order);
    }
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
             'country'=>'required',
             'district'=>'required',
             'phone'=>'required',
             'paymentmethod'=>'required',
             'quantity'=>'required',
             'price'=>'required',
             'bookid'=>'required',
        ]);
        $order = new order;
        $order->email = $request->input('email');
        $order->country = $request->input('country');
        $order->district = $request->input('district');
        $order->phone = $request->input('phone');
        $order->streetaddress = $request->input('streetaddress');
        $order->apartmentaddress = $request->input('apartmentaddress');
        $order->paymentmethod = $request->input('paymentmethod');
        $order->quantity = $request->input('quantity');
        $order->price = $request->input('price') * $order->quantity;
        $order->booknameid = $request->input('bookid');
        $order->save();

        return redirect('/')->with('success','Your order has been made successfuly');

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
        $orders = order::orderBy('created_at','desc')->paginate(10);
        return view('pages.allorders')->with('orders',$orders);
    }
}
