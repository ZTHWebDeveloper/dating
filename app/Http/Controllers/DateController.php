<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
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

    public function send()
    {
    	return view('layout.send');
    }

    public function receive()
    {
    	return view('layout.receive');
    }
}
