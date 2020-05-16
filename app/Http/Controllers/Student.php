<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student extends Controller
{
    public function create_student(Request $req){

    	$validData = $req->validate([
    		// 'Department' => 'required',
    		'IDNum' => 'unique:students,id_number'
    	], [
    		// 'Department' => 'Department is required',
    		'IDNum' => 'Student ID number already in use'
    	]);
    	
    	$id_num = $req->IDNum;

    	DB::table('students')->insert([
    		'fname' => $req->FName,
            'lname' => $req->LName,
            'id_number' => $req->IDNum,
            'gender' => $req->Gender,
            'email' => $req->email,
            'faculty' => $req->Faculty,
            'department' => $req->Department,
            'student_status' => $req->Status,
            'current_year' => $req->CurYear,
            'password' => $req->pwd
    	]);
    	DB::table('finance')->insert([
    		// 'key' => 'value'
            'id_number' => $req->IDNum,
            'account_type' => 'student',
            'created_at' => date('y-m-d h:i:s')
    	]);

        //redirect with success or fail message
        return redirect()->route('show_login')->with('msg','Account Created');
    }
}
