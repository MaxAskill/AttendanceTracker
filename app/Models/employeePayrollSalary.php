<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeePayrollSalary extends Model
{
    use HasFactory;
    protected $table = 'employeepayrollsalary';
    protected $primaryKey = 'payrollID';
    public $timestamps = false;
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}