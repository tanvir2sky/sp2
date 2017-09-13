<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zizaco\Entrust\EntrustFacade as Entrust;

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
    public function index()
    {
       if(Entrust::hasRole('admin')){
           return redirect()->route('admin.dashboard');
       }
       elseif (Entrust::hasRole('customer')){
           return view('user.home');
       }
    }
}
