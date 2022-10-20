<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scheduleMaintenance extends Model
{
    use HasFactory;
    protected $table = 'schedulemaintenance';
    protected $primaryKey = 'scheduleID';
    public $timestamps = false;
    protected $fillable = [
        'scheduleID',
        'region',
        'municipalitycity',
        'chain',
        'branch',
        'startTime',
        'endTime',
    ];
}