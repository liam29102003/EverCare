<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function newAppointment(){
        return view('user.new_appointment_form');
    }

    public function oldAppointment(){
        return view('user.old_appointment_form');
    }
}
