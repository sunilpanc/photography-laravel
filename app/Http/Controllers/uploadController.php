<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function index()
    {
    	return view('upload');
    }

    function uploading(Request $req)
    {
    	 // $this->validate($req, [
      // 'upload'  => 'required|image|mimes:jpg,png,gif,jpeg|max:20480'
      // ]);

    	$image = $req->file('upload');
    	$category = $req->category;
    	$type = $req->type;

    	$p = new \App\upload;
   		$count = $p->where('category',$category)->count('id');
   		$count = $count + 1;

   		$new_name = $count.'.'.$image->getClientOriginalExtension();
      $path = "/".$category."/pre/";
   		$image->move(public_path($path), $new_name);
   		$p->name = $count.".".$image->getClientOriginalExtension();
   		$p->oname = $image->getClientOriginalName();
   		$p->category=$category;
   		$p->type = $type;
   		$p->save();
   		return redirect('index');
    }
}
