<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeRecord extends Model
{
    use HasFactory;
    protected $table = 'timerecord';
    protected $primaryKey = 'timeID';
    public $timestamps = false;
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}