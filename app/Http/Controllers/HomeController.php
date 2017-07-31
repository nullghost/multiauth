<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Gate;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
        
    //         $this->middleware('auth:web');
        
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
            if(Auth::guard('admin')->check() || Auth::guard('web')->check()){
                return view('home');
            }else{
            return redirect()->route('login');
            
            }
        
    }
}
