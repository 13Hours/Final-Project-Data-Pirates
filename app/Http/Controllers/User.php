<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function index(Request $req)
    {	
    	$student = DB::table('students')->select('fname','lname', 'id_number')->first();
    	return view('login', ['student'=>$student]);
    }

    
}
