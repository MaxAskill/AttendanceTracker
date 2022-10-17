<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'userID';
    public $timestamps = false;
    protected $fillable = [
        'userID',
        'firstName',
        'middleName',
        'lastName', 
        'jobPosition',
        'contactNo',
        'email',
        'birthdate',
        'schedule',
        'storeAssignment',
        'brand',
        'company',
        'chain',
        'RAS',
        'HR',
        'dateStarted',
        'status',
        'size'
    ];
}