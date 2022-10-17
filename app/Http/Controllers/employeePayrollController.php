<?php

namespace App\Http\Controllers;

use App\Mail\emailConfirmation;
use App\Models\employeePayrollSalary;
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

class employeePayrollController extends Controller
{

    function Payroll(Request $request){

        $payroll = new employeePayrollSalary();
        $payroll->payrollID = $request->payrollID;
        $payroll->userID = $request->userID;
        $payroll->name = $request->name;
        $payroll->cutOff = $request->cutOff;
        $payroll->noOfDays = $request->noOfDays;
        $payroll->branch = $request->branch;
        $payroll->chain = $request->chain;
        $payroll->monthPay = $request->monthPay;
        $payroll->basicRate = $request->basicRate;
        $payroll->COLARate = $request->COLARate;
        $payroll->SEARate = $request->SEARate;
        $payroll->perHour = $request->perHour;
        $payroll->perMin = $request->perMin;
        $payroll->totalRate = $request->totalRate;
        $payroll->basicPay = $request->basicPay;
        $payroll->COLAPay = $request->COLAPay;
        $payroll->SEAPay = $request->SEAPay;
        $payroll->overtimePay = $request->overtimePay;
        $payroll->holidayPay = $request->holidayPay;
        $payroll->totalPay = $request->totalPay;
        $payroll->SSS = $request->SSS;
        $payroll->PHIC = $request->PHIC;
        $payroll->HMDF = $request->HMDF;
        $payroll->others = $request->others;
        $payroll->total = $request->total;
        $payroll->totalDeduction = $request->totalDeduction;
        $payroll->salary = $request->salary;

        $payroll->save();
    }

}