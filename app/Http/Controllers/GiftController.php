<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
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

    public function gifts()
    {
    	return view('layout.gifts');
    }

    public function gift_details()
    {
    	return view('layout.gift_details');
    }

}
