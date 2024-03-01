@extends('master')

@section('content')

<div class="text-center mt-5" >
        <h3 class="">{{$doctor->name}}</h3>
    </div>
    <div class="container mt-5 text-dark">
        <div class="row d-flex flex-wrap justify-content-center">

            <div class="leftDetail">
                <div class="" style="width:100%; height:350px;">
                    <img src="{{asset('storage/'.$doctor->image)}}" class="w-100" alt="" style="border-radius: 30px;height:100%">
                </div>
            </div>
            <div class="rightDetail pt-1">
                <div class="container">
                    <div class="row">
                        <div class="col-3 p-0 mb-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0" style="background-color: #bb95dc44;">Name:</p></div>
                        <div class="col-9 ps-1 mb-0"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #bb95dc44;">{{$doctor->name}}</p></div>
                    </div>
                    <div class="row ">
                        <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0">Speciality:</p></div>
                        <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0">{{$doctor->sname}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 p-3 mb-0" style="background-color: #bb95dc44;">Qualification:</p></div>
                        <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #bb95dc44;">{{$doctor->qualification}}</p></div>
                    </div>
                    <div class="row ">
                        <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0">Gender:</p></div>
                        <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0">{{$doctor->gender}}</p></div>
                    </div>
                    <div class="row ">
                        <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0" style="background-color: #bb95dc44;">Experience :</p></div>
                        <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #bb95dc44;">{{$doctor->exp}} years + </p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8 offset-2 mt-5">
        <div class="text-center mb-3"><h4 style="background-color: #bb95dc44; width:fit-content; margin:auto" class="px-3 py-2">Biography</h4></div>
        <p style="line-height:40px;text-align: justify;color:black;">
        {{$doctor->bio}}
    </p>
    </div>

@endsection