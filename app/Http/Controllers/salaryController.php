<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\salaryMaintenance;
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

class salaryController extends Controller
{


    public function getSalaryMaintenance(){
    
        $salary = salaryMaintenance::orderby('salaryID','asc')->select('*')->get(); 
         
        // Fetch all records
        $response['data'] = $salary;
    
        return response()->json($response);
      }

    public function create(){
        return view('accouting');
    }

    public function store(Request $request){

        $salary = new salaryMaintenance();
        $salary->salaryID = "00006";
        $salary->branchID = $request->branchID;
        $salary->region = $request->region;
        $salary->municipalitycity = $request->municipalitycity;
        $salary->chain = $request->chain;
        $salary->branch = $request->branch;
        $salary->basicRate = $request->basicRate;
        $salary->perHour = $request->perHour;
        $salary->perMin = $request->perMin;
        $salary->COLA = $request->COLA;

        $salary->save();
        return redirect('accounting')->with('flash_message', 'Salary added');
    }

}