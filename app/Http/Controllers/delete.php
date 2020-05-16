<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class delete extends Controller
{
    public function del(Request $req){
    	$id_num = session('ses')['id_num'];
    	DB::table('transactions')->where('id_number', '=', $id_num)->delete();
    	DB::table('finance')->where('id_number', '=', $id_num)->delete();
    	DB::table('students')->where('id_number', '=', $id_num)->delete();
    	$req->session()->flush();
    	return redirect()->route('show_login')->with('msg','Account succesfully deleted');
    }
}
