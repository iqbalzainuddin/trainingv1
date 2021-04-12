<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Alert::success('Success Title', 'Success Message');
        return view('home')->with('Logged in', 'You have been logged in successfully');
    }
}
