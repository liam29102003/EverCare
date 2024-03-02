@extends('admin.layouts.app')
<style>
    .card-body{
        background-color:white; 
        color: #bb95dc
    }
    .head{
        border-right: 3px solid #bb95dc;
    }
    td{
        color: #bb95dc;
    }
    th{
        color: #bb95dc;
    }
    table{
        border-color: white !important;
    }
    hr{
        border-color: #bb95dc !important;
        background-color: #bb95dc
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 bg-white mt-3 py-2">
                <div class="" style="border:2px dashed #bb95dc">
                    <div class="card-header text-center">
                        <h3 class="text-decoration-underline">{{ __("form.Medical Record") }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row py-2">
                                <div class=" col-lg-2  mb-2  col-6  head">{{ __("form.Name") }}:</div>
                                
                                <div class="col-lg-5  mb-2  col-6 ">{{ $medicalRecord->patient->name }}</div>
                                
                                <div class="  col-lg-2  mb-2  col-6  head">{{ __("form.Date") }}:</div>
                                <div class="col-lg-3  mb-2  col-6 ">{{ $medicalRecord->created_at->format('Y-m-d') }}</div>

                            </div>
                            
                            <div class="row py-2">
                                <div class="col-lg-2  mb-2  col-6 head">{{ __("form.Date of Birth") }}</div>
                                <div class="col-lg-2  mb-2 col-6 " >{{$medicalRecord->patient->dob}}</div>

                                <div class="col-lg-1  mb-2  col-6  head">{{ __("form.Age") }}:</div>
                                <div class="col-lg-1  mb-2  col-6 ">{{ $age }}</div>
                            
                            <div class="col-lg-1  mb-2  col-6  head">{{ __("form.Sex") }}:</div>
                            <div class="col-lg-2  mb-2  col-6 ">{{ $medicalRecord->patient->gender }}</div>
                            <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Patient ID") }}:</div>
                            <div class="col-lg-1  mb-2  col-6 ">{{ $medicalRecord->patient->id }}</div>

                        </div>
                        

                        <div class="row py-2">
                            <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Patient Email") }}:</div>
                            <div class="col-lg-4  mb-2  col-6 ">{{ $medicalRecord->patient->email }}</div>
                            <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Patient Phone") }}:</div>
                            <div class="col-lg-4  mb-2  col-6 ">{{ $medicalRecord->patient->phone }}</div>
                        </div>
                        

                        <div class="row py-2">
                            <div class="col-lg-2  col-6  head">{{ __("form.Diagnosed with") }}:</div>
                            <div class="col-lg-9  col-6 ">{{$medicalRecord->disease}}</div>
                        </div>
                        

                        <div class="row py-2">
                            <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Blood Pressure") }}:</div>
                            <div class="col-lg-2  mb-2  col-6 ">{{ $medicalRecord->blood_pressure }}</div>
                        
                        <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Pulse Rate") }}:</div>
                        <div class="col-lg-2  mb-2  col-6 ">{{ $medicalRecord->pulse_rate }}</div>
                        <div class="col-lg-2  mb-2  col-6  head">{{ __("form.Weight") }}:</div>
                        <div class="col-lg-2  mb-2  col-6  ">{{ $medicalRecord->weight }}</div>
                        </div>
                        

                        <div class="row">
                            <div class="col table-responsive">
                                <table class="table  table-striped " border="1" >
                                    <tr>
                                        <th></th>
                                        <th class="" style="color: #bb95dc">{{ __("form.Medicine") }}</th>
                                        <th class=" text-center" style="color: #bb95dc">{{ __("form.Dosage") }}</th>
                                        <th class="" style="color: #bb95dc">{{ __("Frequency") }}</th>
                                        <th class="" style="color: #bb95dc">{{ __("Duration") }}</th>

                                    </tr>
                                    @if(count($prescription) > 0)
                                    @foreach ($prescription as $presc)
                                    <tr>
                                        <td>1</td>
                                        <td>{{$presc->medicine_name}}</td>
                                        <td class="text-center">{{$presc->dosage}}</td>
                                        <td>{{$presc->frequency}}</td>
                                        <td>{{$presc->duration}}</td>


                                    </tr>
                                    @endforeach
                                    
                                    @endif
                                </table>

                            </div>
                        </div>
                        
                        <div class="row py-2">
                            <div class="col-lg-2  col-6 head">{{ __("form.Diet to follow") }}:</div>
                            <div class="col-lg-10 col-6  ">{{$medicalRecord->diet}}</div>
                        </div>
                        {{--  --}}

                        <div class="row py-2">
                            <div class="col-lg-2  col-6 head">{{ __("form.Note") }}:</div>
                            <div class="col-lg-10 col-6  ">{{$medicalRecord->note}}</div>
                        </div>

                        <div class="row py-2">
                            <div class="col-lg-3  col-6 head">{{ __("form.Doctor") }}:</div>
                            <div class="col-lg-9  col-6 ">{{$medicalRecord->doctor->name}}</div>
                        </div>
                        

                        <div class="row py-2">
                            <div class="col-lg-3  col-6 head">{{ __("form.Follow Up Doctor") }}:</div>
                            <div class="col-lg-9  col-6 ">Dr Thu Ya</div>
                        </div>
                        

                        {{-- <
        
        <div class="row">
            <th>Doctor</th>
            <td>:</td>
            <td>{{$medicalRecord->doctor->name}}</td></td>
        </div>
        <div class="row">
            <th>Disease</th>
            <td>:</td>
            <td>{{$medicalRecord->disease}}</td></td>
        </div>
        <div class="row">
            <th>Symptoms</th>
            <td>:</td>
            <td>{{$medicalRecord->symptoms}}</td></td>
        </div> --}}
                        {{-- <div class="row">
            <th>Note</th>
            <td>:</td>
            <td>{{$medicalRecord->note}}</td></td>
        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
