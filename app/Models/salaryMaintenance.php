<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaryMaintenance extends Model
{
    use HasFactory;
    protected $table = 'salarymaintenance';
    protected $primaryKey = 'salaryID';
    public $timestamps = false;
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}