<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Transaction;
use DB;
use App\Http\Requests;

class TransactionController extends Controller{

    public function allTransaction($id){

        print("Record of all transactions.");
        $transaction= Transaction::where('employee_id', $id)->pluck( 'transaction_amount', 'employee_id');
        
        return $transaction;
    }
}



?>