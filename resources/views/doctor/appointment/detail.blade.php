
@extends('admin.layouts.app')
@section('content')
<div>
    <h1>{{$type}}</h1>
    <h2>{{$id}}</h2></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>{{$appointment->patient->name}}</td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>
                                <td>:</td>
                                <td>{{$appointment->patient->dob}}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>:</td>
                                <td>{{$appointment->patient->gender}}</td>
                            </tr>
                            <tr>
                                <th>Patient Type</th>
                                <td>:</td>
                                <td>{{$appointment->patient_type}}</td>
                            </tr>
                            <tr>
                                <th>Appointment date</th>
                                <td>:</td>
                                <td>{{$appointment->appointment_date}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>:</td>
                                <td>{{$appointment->description}}</td>
                            </tr>
                            @if($appointment->treatment_type === "online")
                            <tr>
                                <th>Symptoms</th>
                                <td>:</td>
                                <td>{{$appointment->symptoms}}</td>
                            </tr>
                            @endif
                            @if($appointment->patient_type === "old")
                            <tr class="text-center">
                                <td colspan="3"><a href="{{route('list.medicalrecord',$appointment->patient->id)}}" wire:navigate class="btn" style="background-color: white; color:#bb95dc; border:2px solid #bb95dc; ">View past medical records</a>
                                </td>
                            </tr>
                            @endif
                            <tr class="text-center">
                                <livewire:appointment-buttom :appointment=$appointment />
                                {{-- <td colspan="3"><a href="{{route('add.medicalrecord')}}" wire:navigate class="btn" style="background-color: white; color:#bb95dc; border:2px solid #bb95dc; ">Add medical records</a>
                                </td> --}}
                            </tr>

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
