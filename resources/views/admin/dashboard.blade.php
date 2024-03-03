@extends('admin.layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row mb-3">
            <dic class="col-10 offset-1">
                <div class="card p-2 " style="background-color: #bb95dc">
                    <div class="d-flex justify-content-between align-items-center">
                        @if($message > 1)
                        <div class="mb-0 text-white">There are <span class="text-danger">{{$message}}</span> unread messages</div>
                        @else
                        <div class="mb-0 text-white">There is <span class="text-danger">{{$message}}</span> unread message</div>
                        @endif
                    <div><a href="{{route('contact.messages')}}" wire:navigate class="btn btn-outline-light"><i class="fa-regular fa-message"></i></a>
                    </div>
                    </div>
                    
                </div>
            </dic>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-center p-3" style="background-color: #bb95dc; color:white">
                    <i class="fa-solid fa-coins mb-3 " style="font-size: 100px"></i>
                    <h4 class="text-white">This month Profit</h4>
                    <h3 class="text-white">100+</h3>
                </div>
            </div>
           
            <div class="col-md-3 mb-3">
                <a href="{{route('staff.list')}}" wire:navigate class="card text-center p-3" style="background-color: #bb95dc; color:white">
                    <i class="fa-solid fa-user-nurse mb-3 " style="font-size: 100px"></i>
                    <h3 class="text-white">Staff</h3>
                    <h3 class="text-white">{{$scount}}</h3>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{route('doctor.list')}}" wire:navigate class="card text-center p-3" style="background-color: #bb95dc; color:white">
                    <i class="fa-solid fa-user-doctor mb-3 " style="font-size: 100px"></i>
                    <h3 class="text-white">Doctor</h3>
                    <h3 class="text-white">{{$dcount}}</h3>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center p-3" style="background-color: #bb95dc; color:white">
                    <i class="fa-solid fa-hospital-user mb-3 " style="font-size: 100px"></i>
                    <h3 class="text-white">Patient</h3>
                    <h3 class="text-white">{{$pcount}}</h3>
                </div>
            </div>


        </div>
    </div>
@endsection
