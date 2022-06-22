<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Transaction;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome' , [
        'emp' => 'Hello'
    ]);
});

Route::get('/emp/add' , [EmployeeController::class , 'store']);

Route::get('/emp/show', function () {
    return view('welcome' , [
        'emp' => Employee::all()
    ]);
});

// Route::get('/emp/show/{no}', function (Employee $no) {
//     return view('welcome' , [
//         'emp' => Employee::find(no)
        
//     ]);
// });

Route::get('/emp/show/{no}', [EmployeeController::class , 'showEmp']);

Route::get('/emp/delete/{id}', [EmployeeController::class , 'delete']);

Route::get('/emp/update/{id}', [EmployeeController::class , 'update']);

Route::get('/emp/salary/{id}', [EmployeeController::class , 'allsalaries']);

Route::get('/emp/{employee}', function(Employee $employee){

    return view('/welcome' , [
        'emp' => $employee->transactions
    ]);
});

Route::get('/emp/transaction/{id}', [EmployeeController::class , 'saveinTransaction']);

Route::get('/emp/transactions/{id}', [TransactionController::class , 'allTransaction']);