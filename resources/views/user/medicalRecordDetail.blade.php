@extends('master')
@section('content')

<style>
    .container{
        color:rgb(42, 41, 41);
        
    }
    .col-lg-10{
        box-shadow:brown
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 bg-white mt-3 py-2">
                <a href="{{route('patient.medicalRecord')}}" style="background-color: #bb95dc; color:white" wire:navigate class="btn" >Back</a>
                <div class="card" style="border:2px dashed #bb95dc">
                    <div class="card-header text-center">
                        <h3 class="text-decoration-underline">{{ __("form.Medical Record") }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row py-md-2">
                                <div class=" col-lg-4  mb-2  col-12  head">{{ __("form.Name") }} &nbsp;  : &nbsp; <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->patient->name }}</span></div>
                                <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Age") }} &nbsp;  : &nbsp;  <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $age }}</span></div>
                                {{-- <div class="col-lg-4 mb-2  col-12 "></div> --}}
                                
                                <div class="  col-lg-4  mb-2  col-12  head">{{ __("form.Date") }} &nbsp;  : &nbsp;<span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->created_at->format('Y-m-d') }}</span></div>
                                {{-- <div class="col-lg-3  mb-2  col-6 "></div> --}}

                            </div>
                            <hr class="mt-0">
                            <div class="row py-md-2">
                                <div class="col-lg-4  mb-2  col-12 head">{{ __("form.Date of Birth") }}  &nbsp;  : &nbsp;<span style="background-color: aliceblue; border-radius:10%" class="p-2"> {{$medicalRecord->patient->dob}}</span></div>
                                {{-- <div class="col-lg-2  mb-2 col-6 " ></div> --}}

                                
                            
                            <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Sex") }} &nbsp;  : &nbsp; <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->patient->gender }}</span></div>
                            {{-- <div class="col-lg-2  mb-2  col-6 "></div> --}}
                            <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Patient ID") }}&nbsp;  : &nbsp;<span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->patient->id }}</span></div>
                            {{-- <div class="col-lg-1  mb-2  col-6 "></div> --}}

                        </div>
                        <hr class="mt-0">

                        <div class="row py-2">
                            <div class="col-lg-6  mb-2  col-12  head">{{ __("form.Patient Email") }}&nbsp;  : &nbsp; <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->patient->email }}</span></div>
                            <div class="col-lg-6  mb-2  col-12  head">{{ __("form.Patient Phone") }}&nbsp;  : &nbsp; <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{ $medicalRecord->patient->phone }}</span></div>
                            {{-- <div class="col-lg-4  mb-2  col-6 "></div>  --}}
                        </div>
                        <hr class="mt-0">


                        <div class="row py-2">
                            <div class="col-lg-12  col-12  head">{{ __("form.Diagnosed with") }} &nbsp;  : &nbsp; <span style="background-color: aliceblue; border-radius:10%" class="p-2">{{$medicalRecord->disease}}</span></div>
                            {{-- <div class="col-lg-9  col-6 "></div> --}}
                        </div>
                        <hr class="mt-0">


                        <div class="row py-2">
                            <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Blood Pressure") }} : <span style="background-color: aliceblue; border-radius:10%" class="p-2">@if($medicalRecord->blood_pressure){{ $medicalRecord->blood_pressure }}@else  - @endif</span></div>
                            {{-- <div class="col-lg-2  mb-2  col-6 "></div> --}}
                        
                        <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Pulse Rate") }} : <span style="background-color: aliceblue; border-radius:10%" class="p-2">@if($medicalRecord->pulse_rate){{ $medicalRecord->pulse_rate }}@else  - @endif</span></div>
                        {{-- <div class="col-lg-2  mb-2  col-6 ">{{ $medicalRecord->pulse_rate }}</div> --}}
                        <div class="col-lg-4  mb-2  col-12  head">{{ __("form.Weight") }} : <span style="background-color: aliceblue; border-radius:10%" class="p-2">@if($medicalRecord->weight){{ $medicalRecord->weight }}@else  - @endif</span></div>
                        {{-- <div class="col-lg-2  mb-2  col-6  "></div> --}}
                        </div>
                        <hr class="mt-0">


                       
                        
                        <div class="row py-2">
                            <div class="col-lg-12  col-12 head">{{ __("form.Diet to follow") }} : <span style="background-color:aliceblue; border-radius:10%" class="p-2">{{$medicalRecord->diet}}</span></div>
                        </div>
                        {{--  --}}
                        <hr class="mt-0">

                        <div class="row py-2">
                            <div class="col-lg-12  col-12 head">{{ __("form.Note") }} : <span style="background-color:aliceblue; border-radius:10%" class="p-2">{{$medicalRecord->note}}</span></div>
                        </div>
                        <hr class="mt-0">

                        <div class="row py-2">
                            <div class="col-lg-6  col-12 head">{{ __("form.Doctor") }} : <span style="background-color:aliceblue; border-radius:10%" class="p-2">{{$medicalRecord->doctor->name}}</span></div>
                            <div class="col-lg-6  col-12 head">{{ __("form.Follow Up Doctor") }} : <span style="background-color:aliceblue; border-radius:10%" class="p-2">@if($medicalRecord->next_doctor){{$medicalRecord->next_doctor}}@else - @endif</div>
                            </div>
                        

                        <hr class="mt-0">
                        {{-- <div class="row">
                            <div class="col table-responsive">
                                <table class="table  table-bordered " border="1" >
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
                        </div> --}}
                        

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