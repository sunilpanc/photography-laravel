<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function index()
    {
    	$p = \App\admin::all();
    	return view('admin');
    }
    function check(Request $req)
    {
    	$p = new \App\admin;
    	$email = $req->email;
    	$pass = $req->password;

    	if($p->email = $email and $p->password = $pass)
    	{
            $req->session()->put('email',$email);
    		return view('upload');
    	}	
    	return view('admin');
    	 	
    }
    function logout(Request $r)
    {
        if($r->session('email'))
        {
            $r->session()->forget('email');
        }
        else if($r->session('userdata'))
        {
            $r->session()->forget('userdata');
        }
        return view('index');
    }
}
