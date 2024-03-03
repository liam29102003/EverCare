@extends('master')

@section('content')
    <style>
      .card{
        border:0px;
        border-radius:10px;
      }
    </style>
    {{-- <div class="container" style="margin-top: 30px;margin-bottom:30px">
        <div class="row">
            <div class="col-lg-6 offset-lg-4">
                <!-- <div class="card border-0 "> -->
                <!-- <a href="" class="btn back shadow shadow-sm mb-2" style="color: #0894b2;"><i class="fa-solid fa-arrow-left "></i></a> -->
                <form action="{{ route('patient.login') }}" method="post" class="shadow pt-2" style="margin: auto;">
                    @csrf
                    <div class="logInContainer text-center">
                        <div class="imgContainer mt-0">
                            <div style='font-size:50px;font-weight:bold; margin-top:10px;color:black;'>Evercare</div>
                            <!-- <img
                      src="logo.png"
                      alt="clinic-logo"
                      style="margin: auto; margin-top: 20px"
                    /> -->

                            <!-- <div class="fs-2 mt-2">Login</div> -->

                            <div class="form-container mx-4 py-4 mb-5 px-3" style="border-radius: 10px">
                                <!-- <p class="fs-4" style="color: #16d;">Login Here</p> -->

                                <div class="textContainer text-center mb-4 mt-3" style='color:#000000bb'>
                                    <label for="email" class="mb-2"><i
                                            class="fa-solid fa-envelope"></i>&nbsp;Email</label>
                                    <input type="text" placeholder="JohnDoe@gmail.com" name="email"
                                        class="form-control" />
                                    @error('email')
                                        <span>{{ $message }}</span>
                                    @enderror
                                    @if (session('email'))
                                        <span>{{ session('email') }}</span>
                                    @endif
                                </div>
                                <div class="textContainer mb-3" style='color:#000000bb'>
                                    <label for="password" class="mb-2"><i
                                            class="fa-solid fa-lock"></i>&nbsp;Password</label>

                                    <div class="passwordContainer">
                                        <input type="password" name="password" id="pwd" placeholder="********"
                                            class="form-control" />

                                        <!-- <button type="button" class="password-toggle-icon">
                            <i class="fa-solid fa-eye" style="color: #000"></i>
                          </button> -->
                                    </div>
                                    @error('password')
                                        <span>{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="submitContainer mb-3 ps-0">
                                    <!-- <input type="reset" value="Clear"> -->
                                    <div class="container-fluid ps-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="index.html" type="submit"
                                                    class="btn shadow text-light w-100 btn-L"
                                                    style="background-color: #000">
                                                    Back
                                                </a>
                                            </div>
                                            <div class="col-8 px-0">
                                                <button type="submit"
                                                    class="btn shadow text-light w-100 text-center loginBtn"
                                                    style="background-color: #000">
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input type="submit" value="Login" class="btn shadow text-light"> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- </div> -->
            </div>
        </div>
    </div> --}}
    <div class="container mt-5 mb-5" style="height: 70vh; ">
      <div class="row">
        <div class="col-md-4 mt-5 align-self-center offset-md-4 ">
          <div class="card " style="background-color: #f7f7ff">
            <div class="card-header pb-0 text-center">
              <div class="text-center" style="color:#bb95dc" ><i class="fa-solid fa-staff-snake me-2 fs-1 " ></i><div class=' fw-bold' style="font-family:fantasy; font-style:italic">EVER CARE</div></div>
              <h1 style="color: #bb95dc; font-family:fantasy; ">@if(request()->segment(1) === "admin") Admin @elseif(request()->segment(1) === "receptionist") Receptionist @elseif(request()->segment(1) === "doctor") Doctor @else Patient @endif Login</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('patient.login') }}" method="post">
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
