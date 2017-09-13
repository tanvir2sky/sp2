<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index(){
        $page_data = [
            'header' => 'Dashboard',
            'sub-header' => 'Aiub Hotel',
        ];
        return view('admin.dashboard', compact('page_data'));
    }




    public function login(){
        return view('auth.login_admin');
    }
}
