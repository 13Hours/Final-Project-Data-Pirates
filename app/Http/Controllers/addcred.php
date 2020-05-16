<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class addcred extends Controller
{
    public function add_credit(Request $req){
    	$cred = $req->credit;
    	$idnum = $req->id;

    	$ogcred = DB::table('finance')->select('account_balance')->where('id_number','=',$idnum)->first();
    	
        $newcred = $cred + $ogcred->account_balance;
        $transaction_id = Str::random(8);

        DB::table('transactions')->insert([
            'id_number' => $idnum,
            'transaction_id' => $transaction_id,
            'type' => 'add_credit',
            'item' => 'money',
            'amount' => $cred,
            'created_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('finance')->where('id_number','=',$idnum)->increment('account_balance', $cred);

    	return Redirect::back()->with('msg',"Transaction has been successful new balance is $newcred.\n Transaction ID: $transaction_id");
    }




}
