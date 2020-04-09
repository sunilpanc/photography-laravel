<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Photography extends Controller
{
	function index()
	{
		return view('Photography');
	}
   function order(Request $r)
   {
         $type2=implode(" and ",$r->input('education'));
         $id=session('id');
         $rep=session('name');
         $store=session('type');
         $val=session('email');
         $v=DB::table('stores')->where('Type',$store)->where('Shoot_type',$type2)->value('Amount');
         $m=new \App\order;
         $m->name=$rep;
         $m->Type=$store;
         $m->Shoot_type=$type2;
         $m->Amount=$v;
         $m->User_id=$id;
         $m->save();
         $value=DB::table('orders')->where('User_id',$id)->count();
         session(['count'=>$value]);
         return view('Success');
   }
   function Remove(Request $p)
   {
      $t=session('id');
      $p->session()->forget('count');
      $m=session('name');
      $Delete=DB::table('orders')->where('User_id',$t)->where('name',$m)->delete();
      $Delete2=DB::table('Photographies')->where('id',$t)->where('name',$m)->delete();
      $value=0;
      $p->session()->put('count',$value);
      return view('Success');
   }
  function store(Request $req)
   {
         $Type=$req->opt;
         $req->session()->put('type',$Type);
         $name=$req->name;
         $req->session()->put('name',$name);
         $email=$req->email;
         $req->session()->put('email',$email);
         $Mobile=$req->Mobile;
         $Reference=$req->Reference;
         $Home=$req->Home;
         $Venue=$req->Venue;
         $Others=$req->Others;
         $date=$req->date;
        $this->validate($req,[
             'name'=>'required|regex:/^[a-z A-Z]+$/',
             'email'=>'required||email|max:255',
             'Mobile'=>'required|min:10',
             'Reference'=>'required|min:10',
             'Home'=>'required',
             'Venue'=>'required',
             'Others'=>'required',
             'date'=>'required'
         ]);
         $p=new \App\Photography;
         $p->Type=$Type;
         $p->name=$name;
         $p->email=$email;
         $p->Contact=$Mobile;
         $p->Reference_No=$Reference;
         $p->Home_address=$Home;
         $p->Venue_address=$Venue;
         $p->Others=$Others;
         $p->Date=$date;
         $p->save();
         $id=$p->id;
         $req->session()->put('id',$id);
         if($Type=='Fashion Shoot')
         {
            return view('Fashion');
         }
         if($Type=='Wedding')
         {
            return view('Wedding1');
         }
         if($Type=='PreWedding')
         {
            return view('PreWedding1');
         }
         if($Type=='Baby-Shoot')
         {
            return view('BabyShoot');
         }
   }
}
