<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
// use Mail;
use App\Mail\SendMail;

class SendOvertimeEmailController extends Controller
{
    

    function index(){
        return view('employee');
    }

    function send(Request $request){
        $this->validate($request, [
            'name'  =>  'required',
            'otdate' => 'required',
            'otduration' => 'required',
            'email' =>  'required|email',
            'status' => 'required',
            'otreason'   =>  'required'
        ]);

        $data = array(
            'name'  =>  $request->name,
            'otdate' => $request->otdate,
            'otduration' => $request->otduration,
            'email' =>  $request->email,
            'status' => $request->status,
            'otreason'   =>  $request->otreason
        );

        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('success', 'Your Application was send!');

    }

    function indexdenied(){
        return view('approver');
    }

    function denied(Request $request){
        $this->validate($request, [
            'applicantname'  =>  'required',
            'approvername' => 'required',
            'dateapplied' => 'required',
            'status' => 'required',
            'email'   =>  'required|email',
            // 'exampleFormControlTextarea1'   =>  'required'
        ]);

        $data = array(
            'applicantname'  =>  $request->applicantname,
            'approvername' => $request->approvername,
            'dateapplied' => $request->dateapplied,
            'otdate' =>  $request->otdate,
            'status' => $request->status,
            'email'   =>  $request->email,
            'otdeniedreason'   =>  $request->otdeniedreason
        );

        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('success', 'You denied an application!');

    }
 


















    //
    // function index(){
    //     $data= [
    //         'subject' => 'Sample Email',
    //         'body' => 'Hello! This is my email delivery!'
    //     ];
    //     try{
    //         Mail::to('rolandalavera@gmail.com')->send(new SendMail($data));
    //         return response()->json(['Success!']);
    //     } catch (Exception $th){
    //         return response()->json(['UnSuccess!']);
    //     }
    // }

    // function send(Request $request){
    //     // $this->validate($request, [
    //     //     'name' => 'required',
    //     //     'email' => 'required|email',
    //     //     'message' => 'reuired'
    //     // ]);

    //     $data = array(
    //         'name' => $request->name,
    //         'message' => $request->message 
    //     );

    //     Mail::to('rolandalavera@gmail.com')->send(new SendMail($data));
    //     return back()->with('success', 'Thanks for everything!' );
    // }
}
