<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\scheduleMaintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Nexmo\Laravel\Facade\Nexmo;

class scheduleController extends Controller
{

    public function getScheduleMaintenance(){
    
        $schedule = DB::select('SELECT *FROM schedulemaintenance'); 
         
        // Fetch all records
        $response['data'] = $schedule;
    
        return response()->json($response);
      }

    function store(Request $request){

        $schedule = new scheduleMaintenance();
        $schedule->scheduleID = $request->scheduleID;
        $schedule->region = $request->region;
        $schedule->municipalitycity = $request->municipalitycity;
        $schedule->chain = $request->chain;
        $schedule->branch = $request->branch;
        $schedule->startTime = $request->startTime;
        $schedule->endTime = $request->endTime;

        $schedule->save();
        return redirect('approver')->with('flash_message', 'Approver added');
    }

}