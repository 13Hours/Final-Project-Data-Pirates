<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class View extends Controller
{
    public function view_acc(Request $req){
    	$id_num = session('ses')['id_num'];
    	$student = DB::table('students')->where('id_number','=',$id_num)->first();
    	return view('ViewAccount', ['student'=>$student]);

    }
}
