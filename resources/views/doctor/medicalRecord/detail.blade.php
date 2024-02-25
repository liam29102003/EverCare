@extends('admin.layouts.app')
<style>
    .card-body{
        background-color:#bb95dc; 
        color: white
    }
    .head{
        border-right: 4px solid white;
    }
    td{
        color: white;
    }
    th{
        color: white;
    }
    table{
        border-color: white !important;
    }
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Medical Record</h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row py-2">
                                <div class=" col-2  head">Name:</div>
                                <div class="col-5 ">{{ $medicalRecord->patient->name }}</div>
                                <div class="  col-2  head">Date:</div>
                                <div class="col-3 ">{{ $medicalRecord->created_at->format('Y-m-d') }}</div>

                            </div>
                            <div class="row py-2">
                                <div class="col-2 head">Date of birth</div>
                                <div class="col-2">{{$medicalRecord->patient->dob}}</div>

                                <div class="col-1  head">Age:</div>
                                <div class="col-1 ">{{ $age }}</div>
                            
                            <div class="col-1  head">Sex:</div>
                            <div class="col-2 ">{{ $medicalRecord->patient->gender }}</div>
                            <div class="col-2  head">Patient ID:</div>
                            <div class="col-1 ">{{ $medicalRecord->patient->id }}</div>

                        </div>
                        <div class="row py-2">
                            <div class="col-2  head">Patient Email:</div>
                            <div class="col-4 ">{{ $medicalRecord->patient->email }}</div>
                            <div class="col-2  head">Patient Phone:</div>
                            <div class="col-4 ">{{ $medicalRecord->patient->phone }}</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-2  head">Diagnosed with:</div>
                            <div class="col-9 ">{{$medicalRecord->disease}}</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-2  head">Blood Preasure:</div>
                            <div class="col-2 ">{{ $medicalRecord->blood_pressure }}</div>
                        
                        <div class="col-2  head">Pulse Rate:</div>
                        <div class="col-2 ">{{ $medicalRecord->blood_pressure }}</div>
                        <div class="col-2  head">Weight:</div>
                        <div class="col-2  ">{{ $medicalRecord->weight }}</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table  " border="1" >
                                    <tr>
                                        <th></th>
                                        <th class="text-white">Medicine</th>
                                        <th class="text-white text-center">Unit</th>
                                        <th class="text-white">Dosage</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Paracetamol</td>
                                        <td class="text-center">1</td>
                                        <td>3 times a day</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Paracetamol</td>
                                        <td class="text-center">1</td>
                                        <td>3 times a day</td>

                                    </tr><tr>
                                        <td>3</td>
                                        <td>Paracetamol</td>
                                        <td class="text-center">1</td>
                                        <td>3 times a day</td>

                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-2 head">Diet to follow:</div>
                            <div class="col-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta ipsum aspernatur a, impedit commodi non eveniet quidem? Quis hic maxime repellat molestias, necessitatibus reiciendis deleniti. Suscipit ut odit ipsam!</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-2 head">Note:</div>
                            <div class="col-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta ipsum aspernatur a, impedit commodi non eveniet quidem? Quis hic maxime repellat molestias, necessitatibus reiciendis deleniti. Suscipit ut odit ipsam!</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 head">Doctor:</div>
                            <div class="col-9 ">{{$medicalRecord->doctor->name}}</div>
                        </div>
                        <div class="row py-2">
                            <div class="col-3 head">Follow Up Doctor:</div>
                            <div class="col-9 ">Dr Thu Ya</div>
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
