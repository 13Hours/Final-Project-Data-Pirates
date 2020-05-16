<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function index(Request $req){
    	//return $req->input();
    	$id_num = $req->id_num;
    	$t1 = DB::table('students')->where('id_number','=',$id_num)->first();
    	if($t1==null){
    		return redirect()->route('show_login')->with('msg','Invalid ID');
    	}
    	$t2 = $t1->password;
    	$pwd = $req->password;
    	if($t2!=$pwd){
    		return redirect()->route('show_login')->with('msg','Invalid Password');
    	}
    	

    	$req->session()->put('ses',$req->input());
    	//return $req->session()->get('ses');
    	return redirect('main');
    }
}
