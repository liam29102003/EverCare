<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ConfirmMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        $subject = "this is subject";
        $body = "this is body";
        Mail::to('thantzinwin1843@gmail.com')->send(new ConfirmMail($subject, $body));
        return back()->with(['success'=>"Appointment confirmation email was sent to all patients successfully!"]);
       }
}
