<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\deductionMaintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Nexmo\Laravel\Facade\Nexmo;

class deductionController extends Controller
{

    public function getDeductionMaintenance(){
    
         // $schedule = scheduleMaintenance::all(); 
         $deduction = DB::select('SELECT * FROM deductionmaintenance ');
         // Fetch all records
         if($deduction == null)
             return response()->json([]);
         return response()->json($deduction);
       
      }

    public function create(){
        return view('accounting');
    }

    function store(Request $request){

        $deduction = new deductionMaintenance();
        $deduction->deductionID = $request->deductionID;
        $deduction->region = $request->region;
        $deduction->municipalitycity = $request->municipalitycity;
        $deduction->chain = $request->chain;
        $deduction->branch = $request->branch;
        $deduction->rangeSalary = $request->rangeSalary;
        $deduction->SSS = $request->SSS;
        $deduction->PHIC = $request->PHIC;
        $deduction->HMDF = $request->HMDF;
        $deduction->total = $request->total;

        $deduction->save();
        return redirect('accounting')->with('flash_message', 'Deduction added');
    }

    function primaryKey(){

    }

}