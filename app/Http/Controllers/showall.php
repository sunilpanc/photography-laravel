<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class showall extends Controller
{
    function about()
    {
        return view('about');
    }
    function createuser()
    {
    	return view('register');
    }

    function insertuser(Request $req)
    {
        $this->validate($req,[
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:8'
        
        ]);

    	$p=new \App\signeduser;
    	$fname=$req->fname;
    	$lname=$req->lname;
    	$email=$req->email;
    	$password=$req->password;
    	$p->fname=$fname;
    	$p->lname=$lname;
    	$p->email=$email;
    	$p->password=$password;
    	$p->save();
    	return view('login');
    }

    function contact()
    {
        return view('contactus');
    }

    function insertcontact(Request $req)
    {

        $this->validate($req,[
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required'
        
        ]);

        $p=new \App\contact;
        $name=$req->name;
        $email=$req->email;
        $subject=$req->subject;
        $message=$req->message;
        $p->name=$name;
        $p->email=$email;
        $p->subject=$subject;
        $p->message=$message;
        $p->save();
        return view('contactus');
    }
   
    function login()
    {
        return view('login');
    }

    function insertlogin(Request $req)
    {
        $this->validate($req,[
        'email'=>'required|email',
        'password'=>'required|min:8'
        ]);
        //$p=new \App\signeduser;
        $email=$req->email;
        $password=$req->password;
        $data=DB::select('select id,email,password from signedusers where email=? and password=?',[$email,$password]);
        if(count($data)>0)
          {
           $user=$email;
           $req->session()->put('userdata',$user);
           $output=$req->session()->get('userdata');
           if($output){
            $req->session()->flash('userdata',$user);
            return view('contactus');
           }
           else
           {
            return view('login');
           } 
        }
    }
}
