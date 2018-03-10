<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NewUserWelcome2;

class SendMailController extends Controller
{
    //
       public function sendMail()

    {

    	$content = [

    		'title'=> 'Itsolutionstuff.com mail', 

    		'body'=> 'The body of your message.',

    		'button' => 'Click Here'

    		];


    	$receiverAddress = 'alanewake99@gmail.com';

    	Mail::to($receiverAddress)->send(new NewUserWelcome($content));

   
    	dd('mail send successfully');

    }
}
