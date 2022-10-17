<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\SendMail;

class SendOTRequestEmailController extends Controller
{
    //
    function index(){
        $data= [
            'subject' => 'Sample Email',
            'body' => 'Hello! This is my email delivery!'
        ];
        try{
            Mail::to('rolandalavera@gmail.com')->send(new SendMail($data));
            return response()->json(['Success!']);
        } catch (Exception $th){
            return response()->json(['UnSuccess!']);
        }
    }

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
