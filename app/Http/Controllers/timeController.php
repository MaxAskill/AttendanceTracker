<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\timeRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Nexmo\Laravel\Facade\Nexmo;

class timeController extends Controller
{

    function TimeRecord(Request $request){

        $time = new timeRecord();
        $time->timeID = $request->timeID;
        $time->userID = $request->userID;
        $time->date = $request->date;
        $time->check_in_am = $request->check_in_am;
        $time->check_out_am = $request->check_out_am;
        $time->check_in_pm = $request->check_in_pm;
        $time->coffee_break_in = $request->coffee_break_in;
        $time->coffee_break_out = $request->coffee_break_out;
        $time->check_out = $request->check_out;
        $time->duration = $request->duration;
        $time->status = $request->status;
       
        $time->save();
    }

}