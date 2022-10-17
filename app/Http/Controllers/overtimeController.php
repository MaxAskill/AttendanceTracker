<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\overtimeRecord;
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

class overtimeController extends Controller
{

    function Salary(Request $request){

        $overtime = new overtimeRecord();
        $overtime->overtimeID = $request->overtimeID;
        $overtime->userID = $request->userID;
        $overtime->duration = $request->duration;
        $overtime->approvedBy = $request->approvedBy;
        $overtime->approvedDate = $request->approvedDate;
        $overtime->appliedDate = $request->appliedDate;
        $overtime->checkIn = $request->checkIn;
        $overtime->checkOut = $request->checkOut;
        $overtime->reason = $request->reason;
        $overtime->status = $request->status;

        $overtime->save();
    }

}