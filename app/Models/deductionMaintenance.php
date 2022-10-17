<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deductionMaintenance extends Model
{
    use HasFactory;
    protected $table = 'deductionmaintenance';
    protected $primaryKey = 'deductionID';
    public $timestamps = false;
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}