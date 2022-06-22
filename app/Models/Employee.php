<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'salary'
    ];

    public function transactions(){

        return $this->hasMany(Transaction::class);
    }

    public static function store(Request $request){
        
        $emp = new Employee;
        $emp -> name = request -> name;
        $emp -> salary = request -> salary;
        $emp -> save();
        return $request;
    }

}
