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
use Intervention\Image\Facades\Image;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Nexmo\Laravel\Facade\Nexmo;

class branchController extends Controller
{

    function Branch(Request $request){

        $branch = new branch();
        $branch->branchID = $request->branchID;
        $branch->userID = $request->userID;
        $branch->branchName = $request->branchName;
        $branch->chainName = $request->companyName;
        $branch->storeName = $request->storeName;

        $branch->save();
    }

}