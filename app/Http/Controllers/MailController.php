<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use App\Mail\ConfirmMail;
use App\Models\Appointment;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        $subject = "this is subject";
        $body = "this is body";
        
        $currentDate = Carbon::now()->toDateString();
        $threeDaysFromNow = Carbon::now()->addDays(3)->toDateString();
        $emails = Appointment::select('email','id')->where('treatment_type','online')
            ->whereDate('appointment_date', '>=', $currentDate)
            ->whereDate('appointment_date', '<=', $threeDaysFromNow)
            ->where('status','pending')
            ->get()->toArray();

        foreach($emails as $email){
            // dd($email['email']);
            Mail::to($email['email'])->send(new ConfirmMail($subject, $body,$email['id']));

            Appointment::where('treatment_type','online')
            ->whereDate('appointment_date', '>=', $currentDate)
            ->whereDate('appointment_date', '<=', $threeDaysFromNow)
            ->where('email',$email['email'])
            ->where('status','pending')
            ->update(['status' => 'sent']);
        }
        // Mail::to('thantzinwin1843@gmail.com')->send(new ConfirmMail($subject, $body));
        return back()->with(['success'=>"Appointment confirmation email was sent to all patients successfully!"]);
       }
}
