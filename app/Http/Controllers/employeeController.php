<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\User;
use App\Models\userInformation;
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

class employeeController extends Controller
{


    public function index(){
        return view('employees');
      }
    
      public function getUsers(){
    
        $employees = userInformation::orderby('userID','asc')->select('*')->get(); 
         
        // Fetch all records
        $response['data'] = $employees;
    
        return response()->json($response);
      }

    public function create(){
        return view('hr');
    }

    public function store(Request $request){

        $input = $request->all();
        userInformation::create($input);
        return redirect('hr')->with('flash_message', 'Employee added');

        // $user = new userInformation();
        // $user->userID = $request->userID;
        // $user->firsName = $request->firstName;
        // $user->middleName = $request->middleName;
        // $user->lastName = $request->lastName;
        // $user->jobPosition = $request->jobPosition;
        // $user->contactNo = $request->contactNo;
        // $user->email = $request->email;
        // $user->birthdate = $request->birthdate;
        // $user->schedule = $request->schedule;
        // $user->storeAssignment = $request->storeAssignment;
        // $user->brand = $request->brand;
        // $user->company = $request->company;
        // $user->chain = $request->chain;
        // $user->RAS = $request->RAS;
        // $user->HR = $request->HR;
        // $user->dateStarted = $request->dateStarted;
        // $user->status = $request->status;
        // $user->size = $request->size;

        // $user->save();
    }

    public function show($id){
        $employee = userInformation::find($id);
        return view('hr')->with('hr', $employee);
    }



    // function UserAuthentication(Request $request){

    //     $userAuthentication = new User();
    //     $userAuthentication->email = $request->email;

    //     $code = mt_rand(100000, 999999);
    //     $userAuthentication->password = $request->$code;

    //     $userAuthentication->save();
    // }

}