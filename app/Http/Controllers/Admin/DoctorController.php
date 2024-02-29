<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index( )
    {
        return view('admin.doctor_table');
    }
    public function add()
    {
        return view('admin.doctor_create');
    }
    public function details(Doctor $doctor)
    { 
        // dd($doctor->schedule[0]->day);
        return view('admin.doctor_details',compact('doctor'));
    }
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor_edit',compact('doctor'));
    }
    
    public function doctorListPage(){
        return view('user.doctor_list');
    }

    public function doctorDetailPage($id){
        return view('user.doctor_detail_page')->with([
            'doctor'=>Doctor::where('id',$id)->first()
        ]);
    }
    
}