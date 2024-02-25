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
{{-- @livewireStyles --}}
{{-- <a href="/blogList" wire:navigate>Go</a> --}}
{{-- @extends('master')
@section('content')
<x-guest-layout >
    <x-authentication-card>
        <x-slot name="logo">
            
            <span class="  demo menu-text  text-center  " style="flex-shrink: 0;
            opacity: 1; color: #bb95dc;
            transition: opacity 0.15s ease-in-out; font-family:fantasy; font-style: italic; font-size:60px !important ; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); "><i class="fa-solid fa-staff-snake me-2 " style="font-size:70px"></i><span >EVER CARE</span></span>
            </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') :  route('login') }}">
            @csrf
            
            <div>
                
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')"  autofocus autocomplete="username" />
                <p>@error('email')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </p>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <p>@error('password')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </p>
            </div>



            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-white dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@endsection --}}
