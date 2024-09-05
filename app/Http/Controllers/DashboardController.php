<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showdb(){
        // return view('admin.dashboard');
        return view('admin.dashboard');
    }

    public function tmptemplate(){
        return view('tmpTemplate');
    }
    // public function show(){
    //    return view('dasboard');
    // }
}
