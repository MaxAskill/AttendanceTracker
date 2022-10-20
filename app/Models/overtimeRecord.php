<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class overtimeRecord extends Model
{
    use HasFactory;
    protected $table = 'overtimerecord';
    protected $primaryKey = 'overtimeID';
    public $timestamps = false;
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}