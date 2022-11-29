<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\branch;
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

class branchController extends Controller
{


    public function getBranchMaintenance(){
    
        // $schedule = scheduleMaintenance::all(); 
        $branch = DB::select('SELECT * FROM branch');
        // Fetch all records
        if($branch == null)
            return response()->json([]);
        return response()->json($branch);
      }

    function store(Request $request){

        $branch = new branch();
        $branch->branchID = $request->branchID;
        $branch->region = $request->region;
        $branch->branch = $request->branch;
        $branch->chain = $request->chain;
        $branch->municipalitycity = $request->municipalitycity;

        $branch->save();

        // return redirect('accounting')->with('flash_message', 'Branch added');
    }

}