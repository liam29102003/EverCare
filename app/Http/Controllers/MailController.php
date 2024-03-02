<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use App\Models\Doctor;
use App\Mail\cancelMail;
use App\Mail\ApproveMail;
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
        $emails = Appointment::select('appointments.*','doctors.name as dname','patients.*')
        ->where('treatment_type','online')
        ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
        ->join('patients','patients.id','appointments.patient_id')
            ->whereDate('appointment_date', '>=', $currentDate)
            ->whereDate('appointment_date', '<=', $threeDaysFromNow)
            ->where('status','pending')
            ->get()->toArray();

        foreach($emails as $email){
            // dd($email['email']);
            Mail::to($email['email'])->send(new ConfirmMail($subject, $body,$email['id'],$email['appointment_date'],$email['appointment_day'],$email['name'],$email['dname']));

            Appointment::where('treatment_type','online')
            ->whereDate('appointment_date', '>=', $currentDate)
            ->whereDate('appointment_date', '<=', $threeDaysFromNow)
            ->where('patient_id',$email['patient_id'])
            ->where('status','pending')
            ->update(['status' => 'sent']);
        }
        // Mail::to('thantzinwin1843@gmail.com')->send(new ConfirmMail($subject, $body));
        return back()->with(['success'=>"Appointment confirmation email was sent to all patients successfully!"]);
       }


       public function cancelMail($id,$email){
        $appointment = Appointment::where('id',$id)->first();
        $doctor = Doctor::where('id',$appointment->doctor_id)->first();
        Mail::to($email)->send(new cancelMail($appointment->appointment_date,$appointment->appointment_day,$doctor->name));
        $appointment->delete();
        return back()->with(['success'=>"Appointment cancellation success!"]);
    }

    public function approveMail($id,$email){
        $appointment = Appointment::where('id',$id)->first();
        $doctor = Doctor::where('id',$appointment->doctor_id)->first();
        Mail::to($email)->send(new ApproveMail($appointment->appointment_date,$appointment->appointment_day,$doctor->name));
        $appointment->update([
            'status'=>'approved',
        ]);
        return back()->with(['success'=>"Appointment approved success!"]);
    }
}
