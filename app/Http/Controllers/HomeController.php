<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
// use App\Profile;
use App\Profilechange;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $id=Auth::user()->id;
    //     $users=DB::table('users')
    //                ->join('profiles','users.id','=','profiles.id')
    //                ->select('users.*','profiles.*')
    //                ->where('users.id','<>',$id)
    //                ->get();
    //     return view('layout.index',compact('users'));
    // }



    //Naung Naung
    public function index()
    {
        $id=Auth::user()->id;
        $users=Profilechange::where('user_id','<>',$id)->get();
        return view('layout.index',compact('users'));
    }
}
