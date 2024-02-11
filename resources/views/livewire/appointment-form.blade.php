<div class="container pt-5 ">
<div class="row mb-3">
                            @if (session('message'))
                                <livewire:second-alert>
                            @endif

                        </div>
        <form action="" wire:submit='save'>
            @csrf
            <div class="col-12 col-md-8 offset-md-2 p-5 border-rounded form-container d-flex flex-column justify-content-center align-items-center">
                <h2 class="txt-shadow">Make Appointment Here!</h2>
                <p class="text-center">Fill the form below and we will get back soon to you for more updates and plan your appointment.</p>
               
                <div class="bg-dark w-100" style="height:2px"></div>

                <div class="w-100 wrap mt-3">
                    <label for="">Please Select The Appointment Type <span class='text-danger'>(Choose one*)</span></label>
                    <div class="d-flex wrap">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary " type="radio" wire:model="treatment_type" value='in person'>
                                <label class="form-check-label" >
                                  In person treatment
                                </label>
                              </div>
                        <!-- <small for="" class="text-secondary">First Name</small> -->
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary " type="radio" wire:model="treatment_type" value='online'>
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
                        <input type="text" class="form-control" wire:model='name' placeholder="Johnn Doe">
                        @error('name')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                        <div class="right email">
                            <label for="">Email<span class='text-danger'>*</span></label>
                            <input type="email" class="form-control " wire:model='email' placeholder="example@gmail.com">
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
                        <input type="password" class="form-control" placeholder="password" wire:model='password'>
                        @error('password')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                        <div class="right">
                            <label for="">Confirm password<span class='text-danger'>*</span></label>
                            <input type="password" class="form-control" placeholder="Confirm password" wire:model='confirm_password'>
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
                            <input type="date" class="form-control" wire:model='dob' placeholder="First Name">
                            @error('dob')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Phone No<span class='text-danger'>*</span></label>
                            <input type="text" class="form-control" placeholder="09456********" wire:model='phone' aria-label="Username" aria-describedby="basic-addon1">
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
                                <input class="form-check-input bg-secondary" value='male' type="radio" wire:model="gender" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Male
                                </label>
                              </div>
                        <!-- <small for="" class="text-secondary">First Name</small> -->
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input bg-secondary" value='female' type="radio" wire:model="gender" id="flexRadioDefault1">
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
                    <textarea wire:model="address" id="" class="w-100 form-control" rows="3" placeholder="City, Street, Home No"></textarea>
                </div>
    
                <div class="w-100 wrap mt-3">
                    <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                            <label for="">Choose Doctor<span class='text-danger'>*</span></label>
                            <select class="form-control form-select " aria-label="Default select example" wire:model='doctor'>
                                <option selected>Doctor (Speciality)</option>
                                <option value="1">Aye Aye (OG)</option>
                                <option value="2">Mg Mg (Surgery)</option>
                                <option value="3">Than Than (Cardiac)</option>
                            </select>
                            @error('doctor')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Choose Appointment Date<span class='text-danger'>*</span></label>
                            <select class="form-control form-select " wire:model='appointment_date' aria-label="Default select example">
                                <option selected value='3'>Monday (4:30)</option>
                                <option value="1">Wednesday (2:30)</option>
                            </select>
                            @error('appointment_date')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="w-100 mt-3 ">
                    <label for="">Description</label>
                    <textarea wire:model="description" id="" class="w-100 form-control" rows="3" placeholder="symptoms"></textarea>
                </div>
                <input type="submit" value="Make Appointment" class="m-auto text-center col-lg-4 btn btn-dark mt-3">
                
            </div>
        </form>
    </div>


