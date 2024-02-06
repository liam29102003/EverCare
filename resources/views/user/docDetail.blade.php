@extends('user.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('user/assets/doctor.css') }}">
<link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">
<link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}">
<link rel="stylesheet" href="{{asset('user/assets/login-signup.css')}}">
@endsection
@section('content')
<div class="text-center mt-5">
    <h1>PROF SMITH</h1>
</div>
<div class="container mt-5">
    <div class="row">

        <div class="col-4 offset-1">
            <div>
                <img src="images/prof-Khin-TUn.jpg" class="w-100" alt="" style="border-radius: 30px;">
            </div>
        </div>
        <div class="col-6 pt-1">
            <div class="container">
                <div class="row">
                    <div class="col-3 p-0 mb-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0" style="background-color: #16d4ad77;">Name:</p></div>
                    <div class="col-9 ps-1 mb-0"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #16d4ad77;">{{$doctor->name}}</p></div>
                </div>
                <div class="row ">
                    <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0">Speciality:</p></div>
                    <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0">{{$doctor->speciality}}</p></div>
                </div>
                <div class="row">
                    <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0" style="background-color: #16d4ad77;">Qualification:</p></div>
                    <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #16d4ad77;">{{$doctor->qualification}}</p></div>
                </div>
                <div class="row ">
                    <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0">Gender:</p></div>
                    <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0">{{$doctor->gender}}</p></div>
                </div>
                <div class="row ">
                    <div class="col-3 p-0"><p class=" ps-3 fw-bold h-1 py-3 mb-0" style="background-color: #16d4ad77;">Language :</p></div>
                    <div class="col-9 ps-1"><p class=" ps-3  h-1 py-3 mb-0" style="background-color: #16d4ad77;">English, Burmese</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-8 offset-2 mt-5">
    <div class="text-center mb-3"><h4 style="background-color: #16d4ad77; width:fit-content; margin:auto" class="px-3 py-2">Biography</h4></div>
    <p style="line-height:40px">{{$doctor->bio}}</p>
</div>
    
@endsection