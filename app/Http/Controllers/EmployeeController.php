<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Transaction;
use DB;
use App\Http\Requests;


class EmployeeController extends Controller
{
    public function store(){

        $emp = new Employee;
        $emp -> name = 'name';
        $emp -> salary = '2222';
        $emp -> save();
        print('Data Entered Successfully');
        return $emp;
    }

    public function delete($id){

        $emp = Employee::where('id', $id)->firstorfail()->delete();
        print("User Record deleted successfully.");
        return $emp;
    }

    public function showEmp($id){

        $emp = Employee::where('id', $id)->find($id);
        print("User Record deleted successfully.");
        return $emp;
    }

    public function update($id){

        $emp = Employee::find($id);
        $emp -> name = 'name2';
        $emp -> salary = '2333';
        $emp -> save();
        // $update = Employee::where('id', $id)->firstorfail()->update();
        // DB::update('update employees set salary = ? where name = ?', [$salary,$name]);
        print("Record updated successfully.");
        return $id;
    }

    public function allsalaries($id){

        print("Record of all salaries.");
        $salary = Employee::where('id', $id)->pluck('salary');
        
        return $salary;
    }

    public function saveinTransaction($id){
        
        $salary = Employee::where('id', $id)->pluck('salary');
        // dd($salary);
        $t = Transaction::find($id);
        $t -> transaction_amount = $salary[0];
        $t -> save();
        print("Transaction record updated successfully.");
        return $t;
    }

}
?>