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
use Intervention\Image\Facades\Image;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Nexmo\Laravel\Facade\Nexmo;

class deductionController extends Controller
{


    public function getDeductionMaintenance(){
    
        $deduction = deductionMaintenance::orderby('deductionID','asc')->select('*')->get(); 
         
        // Fetch all records
        $response['data'] = $deduction;
    
        return response()->json($response);
      }

    public function create(){
        return view('accounting');
    }

    function store(Request $request){

        $deduction = new deductionMaintenance();
        $deduction->deductionID = "00005";
        $deduction->branchID = $request->branchID;
        $deduction->rangeSalary = $request->rangeSalary;
        $deduction->SSS = $request->SSS;
        $deduction->PHIC = $request->PHIC;
        $deduction->HMDF = $request->HMDF;
        $deduction->total = $request->total;

        $deduction->save();
        return redirect('accounting')->with('flash_message', 'Deduction added');
    }

}