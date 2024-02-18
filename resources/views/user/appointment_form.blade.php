@extends('master')


@section('content')
<div class="container pt-5">
    @if(session()->get('email') == '')
        <form action="{{route('appointment.make')}}" method='post'>
            @csrf
            <div class="col-12 col-md-8 offset-md-2 p-5 border-0 form-container d-flex flex-column justify-content-center align-items-center" style="background-color:#bb95dc22; color:#9d926a !important">
                <h2 class="txt-shadow">Make Appointment Here!</h2>
                <p class="text-center">Fill the form below and we will get back soon to you for more updates and plan your appointment.</p>
               
                <div class="bg-dark w-100" style="height:2px"></div>

                <div class="w-100 wrap mt-3">
                    <label for="">Please Select The Appointment Type <span class='text-danger'>(Choose one*)</span></label>
                    <div class="d-flex wrap">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" type="radio" name="treatment_type" value='in person'>
                                <label class="form-check-label" >
                                  In person treatment
                                </label>
                              </div>
                        <!-- <small for="" class="text-secondary">First Name</small> -->
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary " type="radio" name="treatment_type" value='online'>
                                <label class="form-check-label" >
                                  Online treatment
                                </label>
                              </div>
                        </div>
                    </div>
                    @error('treatment_type')
                            <span class='text-danger'>{{$message}}</span>
                    @enderror
                </div>
                
                <div class="w-100 wrap mt-3">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left displayNone">
                        <label for="">Name<span class='text-danger'>*</span></label>
                        <input type="text" class="form-control shadow-sm" name='name' placeholder="Johnn Doe" style='border:0'>
                        @error('name')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                        <div class="right email">
                            <label for="">Email<span class='text-danger'>*</span></label>
                            <input type="email" class="form-control shadow-sm " name='email' placeholder="example@gmail.com" style='border:0'>
                            @error('email')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        
                    </div>
                </div>

                <div class="w-100 wrap mt-3 displayNone">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                        <label for="">Password<span class='text-danger'>*</span></label>
                        <input type="password" class="form-control shadow-sm" placeholder="password" name='password' style='border:0'>
                        @error('password')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                        <div class="right">
                            <label for="">Confirm password<span class='text-danger'>*</span></label>
                            <input type="password" class="form-control shadow-sm" placeholder="Confirm password" name='confirm_password' style='border:0'>
                            @error('confirm_password')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                </div>
    

                <div class="w-100 wrap mt-3 displayNone">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                            <label for="">Date of birth<span class='text-danger'>*</span></label>
                            <input type="date" class="form-control shadow-sm" name='dob' placeholder="First Name" style='border:0'>
                            @error('dob')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Phone No<span class='text-danger'>*</span></label>
                            <input type="number" class="form-control shadow-sm" placeholder="09456********" name='phone' aria-label="Username" aria-describedby="basic-addon1" style='border:0'>
                            @error('phone')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                </div>

    
                <div class="w-100 wrap mt-3 displayNone">
                    <label for="">Gender</label>
                    <div class="d-flex wrap" style="gap: 6px;">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" value='male' type="radio" name="gender" id="flexRadioDefault1" style='border:0'>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                        <!-- <small for="" class="text-secondary">First Name</small> -->
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" value='female' type="radio" name="gender" id="flexRadioDefault1" style='border:0'>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Female
                                </label>
                              </div>
                        </div>
                        @error('gender')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                </div>
    
                <div class="w-100 mt-3 displayNone">
                    <label for="">Address</label>
                    <textarea name="address" style='border:0' id="" class="w-100 form-control shadow-sm" rows="3" placeholder="City, Street, Home No"></textarea>
                </div>
    
                <div class="w-100 wrap mt-3">
                    <livewire:dynamic-schedule/>
                </div>
                <div class="w-100 mt-3 ">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="w-100 form-control shadow-sm" rows="3" placeholder="symptoms" style='border:0'></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3 border-0 d-flex align-items-center"
                style="background:#bb95dcff; color:#fffdd2; border-color:#9d926a !important ">
                    <div>Make Appointment</div>

                    <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
                
            </div>
        </form>
    @else
    <form action="{{route('old.appointment.make')}}" method='post'>
            @csrf
            <div class="col-12 col-md-8 offset-md-2 p-5 border-0 form-container d-flex flex-column justify-content-center align-items-center" style="background-color:#bb95dc22; color:#9d926a !important">
                <h2 class="txt-shadow">Make Appointment Here!</h2>
                <p class="text-center">Fill the form below and we will get back soon to you for more updates and plan your appointment.</p>
               
                <div class="bg-dark w-100" style="height:2px"></div>

                <div class="w-100 wrap mt-3">
                    <label for="">Please Select The Appointment Type <span class='text-danger'>(Choose one*)</span></label>
                    <div class="d-flex wrap">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" type="radio" name="treatment_type" value='in person'>
                                <label class="form-check-label" >
                                  In person treatment
                                </label>
                              </div>
                        <!-- <small for="" class="text-secondary">First Name</small> -->
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary " type="radio" name="treatment_type" value='online'>
                                <label class="form-check-label" >
                                  Online treatment
                                </label>
                              </div>
                        </div>
                    </div>
                    @error('treatment_type')
                            <span class='text-danger'>{{$message}}</span>
                    @enderror
                </div>
                
                <div class="w-100 wrap mt-3">
                    <!-- <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left displayNone">
                        <label for="">Name<span class='text-danger'>*</span></label>
                        <input type="hidden" class="form-control shadow-sm" value="{{session()->get('name')}}" name='name' placeholder="Johnn Doe" style='border:0'>
                        @error('name')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div> -->
                        <div class="email" >
                            <label for="">Email<span class='text-danger'>*</span></label>
                            <input type="email" disabled class="form-control shadow-sm " value="{{session()->get('email')}}" name='email' placeholder="example@gmail.com" style='border:0'>
                            @error('email')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        
                    
                </div>

                <!-- <div class="w-100 wrap mt-3 displayNone">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                        <label for="">Password<span class='text-danger'>*</span></label>
                        <input type="password" class="form-control shadow-sm" placeholder="password" name='password' style='border:0'>
                        @error('password')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                        <div class="right">
                            <label for="">Confirm password<span class='text-danger'>*</span></label>
                            <input type="password" class="form-control shadow-sm" placeholder="Confirm password" name='confirm_password' style='border:0'>
                            @error('confirm_password')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                </div> -->
    

                <!-- <div class="w-100 wrap mt-3 displayNone">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                            <label for="">Date of birth<span class='text-danger'>*</span></label>
                            <input type="date" class="form-control shadow-sm" name='dob' placeholder="First Name" style='border:0'>
                            @error('dob')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Phone No<span class='text-danger'>*</span></label>
                            <input type="number" class="form-control shadow-sm" placeholder="09456********" name='phone' aria-label="Username" aria-describedby="basic-addon1" style='border:0'>
                            @error('phone')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                </div> -->

    
                <!-- <div class="w-100 wrap mt-3 displayNone">
                    <label for="">Gender</label>
                    <div class="d-flex wrap" style="gap: 6px;">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" value='male' type="radio" name="gender" id="flexRadioDefault1" style='border:0'>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                     
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" value='female' type="radio" name="gender" id="flexRadioDefault1" style='border:0'>
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Female
                                </label>
                              </div>
                        </div>
                        @error('gender')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                </div>
     -->
                <!-- <div class="w-100 mt-3 displayNone">
                    <label for="">Address</label>
                    <textarea name="address" style='border:0' id="" class="w-100 form-control shadow-sm" rows="3" placeholder="City, Street, Home No"></textarea>
                </div> -->
    
                <div class="w-100 wrap mt-3">
                    <livewire:dynamic-schedule/>
                </div>
                <div class="w-100 mt-3 ">
                    <label for="">Description</label>
                    <textarea name="description" id="" class="w-100 form-control shadow-sm" rows="3" placeholder="symptoms" style='border:0'></textarea>
                </div>
                <button type="submit" class="btn mt-3 border-0 d-flex align-items-center"
                style="background:#bb95dcff; color:#fffdd2; border-color:#9d926a !important ">
                    <div>Make Appointment</div>

                    <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
                
            </div>
        </form>
    @endif
    </div>



@endsection