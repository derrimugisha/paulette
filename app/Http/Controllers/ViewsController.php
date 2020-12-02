<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\RatingTable;
use App\Models\Myfiles;

class ViewsController extends Controller
{
    public function index(){
    //    $raters =Myfiles::leftJoin('rating_tables', 'rating_tables.postid', '=', 'Myfiles.id')
    //    ->select('Myfiles.*')
    //    ->get()->paginate(10);

    //     return view('pages.myviews')->with('raters',$raters);
    $user = Auth::user();
        if(!$user){
            return view('auth.login');
         }
    $raters =  DB::table('rating_tables')
        ->join('myfiles', 'rating_tables.postid', '=', 'myfiles.id')
        ->orderBy('rating_tables.created_at', 'desc')
        ->select('myfiles.*','rating_tables.header as header','rating_tables.writer as writer',
        'rating_tables.created_at as created_at')
        ->paginate(10);
        return view('pages.myviews')->with('raters',$raters);
    }
}
