@extends('master')

@section('content')
<div class="container" style="margin-top: 30px;margin-bottom:30px">
      <div class="row">
        <div class="col-lg-6 offset-lg-4">
          <!-- <div class="card border-0 "> -->
          <!-- <a href="" class="btn back shadow shadow-sm mb-2" style="color: #0894b2;"><i class="fa-solid fa-arrow-left "></i></a> -->
          <form action="{{route('patient.login')}}" method="post" class="shadow pt-2" style="margin: auto;">
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

                <div
                  class="form-container mx-4 py-4 mb-5 px-3"
                  style="border-radius: 10px"
                >
                  <!-- <p class="fs-4" style="color: #16d;">Login Here</p> -->

                  <div class="textContainer text-center mb-4 mt-3" style='color:#000000bb'>
                    <label for="email" class="mb-2"
                      ><i class="fa-solid fa-envelope"></i>&nbsp;Email</label
                    >
                    <input
                      type="text"
                      placeholder="JohnDoe@gmail.com"
                      name="email"
                      class="form-control"
                    />
                    @error('email')
                      <span>{{$message}}</span>
                    @enderror
                    @if(session('email'))
                    <span>{{session('email')}}</span>
                    @endif
                  </div>
                  <div class="textContainer mb-3" style='color:#000000bb'>
                    <label for="password" class="mb-2"
                      ><i class="fa-solid fa-lock"></i>&nbsp;Password</label
                    >

                    <div class="passwordContainer">
                      <input
                        type="password"
                        name="password"
                        id="pwd"
                        placeholder="********"
                        class="form-control"
                      />
                      
                      <!-- <button type="button" class="password-toggle-icon">
                        <i class="fa-solid fa-eye" style="color: #000"></i>
                      </button> -->
                    </div>
                    @error('password')
                      <span>{{$message}}</span>
                    @enderror
                    
                  </div>
               
                  <div class="submitContainer mb-3 ps-0">
                    <!-- <input type="reset" value="Clear"> -->
                    <div class="container-fluid ps-0">
                      <div class="row">
                        <div class="col-4">
                          <a href="index.html"
                            type="submit"
                            class="btn shadow text-light w-100 btn-L"
                            style="background-color: #000"
                          >
                            Back
                        </a>
                        </div>
                        <div class="col-8 px-0">
                          <button
                            type="submit"
                            class="btn shadow text-light w-100 text-center loginBtn"
                            style="background-color: #000"
                          >
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
    </div>
@endsection