
@extends('master')

@section('content')
    <style>
      .card{
        border:0px;
        border-radius:10px;
      }
    </style>
    
    <div class="container mt-5 mb-5" style="height: 70vh; ">
      <div class="row">
        <div class="col-md-4 mt-5 align-self-center offset-md-4 ">
          <div class="card " style="background-color: #f7f7ff">
            <div class="card-header pb-0 text-center">
              <div class="text-center" style="color:#bb95dc" ><i class="fa-solid fa-staff-snake me-2 fs-1 " ></i><div class=' fw-bold' style="font-family:fantasy; font-style:italic">EVER CARE</div></div>
              <h1 style="color: #bb95dc; font-family:fantasy; ">@if(request()->segment(1) === "admin") Admin @elseif(request()->segment(1) === "receptionist") Receptionist @elseif(request()->segment(1) === "doctor") Doctor @else Patient @endif Login</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : url('login') }}">
                    @csrf
                <div class="px-3 mb-4 mt-2">
                  <div class="form-floating mb-0">
                    <input type="email" class="form-control  shadow-sm" name="email" id="floatingInput" placeholder="name@example.com" style="border:3px double #bb95dc">
                    <label for="floatingInput" style="color: #bb95dc">Email address</label>
                  </div>
                  @error('email')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="px-3 mb-4">
                  <div class="form-floating">
                    <input type="password" class="form-control    shadow-sm" name='password' id="floatingPassword" placeholder="Password" style="border:3px double #bb95dc">
                    <label for="floatingPassword" style="color: #bb95dc">Password</label>
                  </div>
                  @error('password')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <div class="px-5 mb-2 text-center mt-4" >
                 <button class="btn" style="background-color: #bb95dc; color:white">Login</button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection

