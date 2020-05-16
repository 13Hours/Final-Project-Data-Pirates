<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class Transaction extends Controller
{
    public function add_transaction(Request $req)
    {
    	date_default_timezone_set('America/Port_of_Spain');
    	if(empty($req->barcode))
    		return back()->with('error', 'Bar Code is missing');
    	//check amount empty
    	//check item selected

    	$user = DB::table('finance')->select('account_balance')->where('id_number', $req->barcode)->first();

    	if(is_null($user))
    		return back()->with('error', 'ID number not found');

    	if($user->account_balance < $req->amount)
    		return back()->with('error', 'Insufficient balance');

    	$transaction_id = Str::random(8);

    	DB::table('transactions')->insert([
            'id_number' => $req->barcode,
            'transaction_id' => $transaction_id,
            'type' => 'purchase',
            'item' => $req->item,
            'amount' => $req->amount,
            'created_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('finance')->where('id_number','=',$req->barcode)->decrement('account_balance', $req->amount);

        return Redirect::back()->with('msg',"Transaction has been successful.\n Transaction ID: $transaction_id");
    }

    public function view_transactions(Request $req){
        $id_num = session('ses')['id_num'];
        $transactions = DB::table('transactions')->where('id_number','=',$id_num)->get();
        return view('view_transactions', ['transactions'=>$transactions]);
    }
}
