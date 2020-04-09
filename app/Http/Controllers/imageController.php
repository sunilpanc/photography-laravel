<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class imageController extends Controller
{
    //
    function prewedding()
    {
    	$p=DB::table('uploads')->get();
    	// return $p;
    	return view('prewedding',['row'=>$p]);
    }
    function wedding()
    {
    	$p=DB::table('uploads')->get();
    	// return $p;
    	return view('wedding',['row'=>$p]);
    }
    function kids()
    {
    	$p=DB::table('uploads')->get();
    	// return $p;
    	return view('kids',['row'=>$p]);
    }
    function modeling()
    {
    	$p=DB::table('uploads')->get();
    	// return $p;
    	return view('modeling',['row'=>$p]);
    }

}
