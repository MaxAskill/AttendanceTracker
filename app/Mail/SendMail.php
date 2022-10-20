<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    function pending(){
        return $this->from('sample.404.test@gmail.com')->subject('Pending Overtime Application!')
        ->view('pendingapplication')->with('data', $this->data);
    }

    function approved(){
        return $this->from('sample.404.test@gmail.com')->subject('Your Overtime Application Approved!')
        ->view('dynamic_email_template')->with('data', $this->data);
    }

    function denied(){
        return $this->from('sample.404.test@gmail.com')->subject('Your Overtime Application Denied!')
        ->view('deniedapplication')->with('data', $this->data);
    }

    public function build()
    {
        
        // ->subject($this->data['subject'])
        // ->view('dynamic_email_template')->with('data',$this->data);
        if($this->data["status"]=="pending"){
           $this->pending();
        }
        elseif($this->data["status"]=="approved"){
            $this->approved();
        }
        else{
            $this->denied();
        }
    }

    







    // private $data = [];

    // /**
    //  * Create a new message instance.
    //  *
    //  * @return void
    //  */
    // public function __construct($data)
    // {
    //     $this->data = $data;
    // }

    // /**
    //  * Build the message.
    //  *
    //  * @return $this
    //  */
    // public function build()
    // {
    //     return $this->from('sample.404.test@gmail.com')->subject('Sample Email')
    //     // ->view('dynamic_email_template')->with('data', $this->data);
    //     ->subject($this->data['subject'])
    //     ->view('dynamic_email_template')->with('data',$this->data);
    // }
}
