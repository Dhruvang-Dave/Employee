<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Transaction extends Model
{
    use HasFactory;

    protected $table= 'transactions';

    protected $fillable = [
        'transaction_amount',
        'employee_id'
    ];

    public function employees(){

        return $this->belongsTo(Employee::class);

    }
}
