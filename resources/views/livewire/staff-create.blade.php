<div class="container-fluid flex-grow-1 container-p-y ">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-md-6 offset-md-3">
            <div class="card mb-4 p-2 p-md-0" style="background-color:#bb95dccc; color:#ffffff !important">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h3 class="mb-0 text-white">Add Staff</h3>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form method="post" wire:submit='save' action="" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            @if (session('status'))
                                <livewire:alert>
                            @endif

                        </div>




                        <div class="row mb-2 w-25  p-0 tex-center" style="margin: auto">
                            <div class="spinner-border ms-2 text-secondary text-center mb-3 " wire:loading
                                wire:target='image' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            @if ($image)
                                <img style="border: 5px double; border-radius:10px " class="w-100"
                                    src="{{ $image->temporaryUrl() }}" alt="Image Preview">
                            @endif

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Image :</label>

                            <div class="">
                                <input type="file" class="form-control shadow-sm" id="basic-default-name" name='image'
                                    wire:model='image' placeholder="John Doe"  style="border:0"/>
                                <small class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>


                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Name :</label>

                            <div class="">
                                <input type="text" class="form-control shadow-sm" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe"  style="border:0"/>
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>

                        </div>
                        

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Address:</label>

                            <div class="">
                                <input type="text" class="form-control shadow-sm" id="basic-default-address"
                                    placeholder="address" name='address' wire:model='address'  style="border:0"/>
                                <small class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Qualification</label>

                            <div class="">
                                <input type="text" class="form-control shadow-sm" id="basic-default-qa" placeholder="qualification"
                                    name='qualification' wire:model='qualification'  style="border:0"/>
                                <small class="text-danger">
                                    @error('qualification')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">DOB</label>

                            <div class="">
                                <input type="date" class="form-control shadow-sm" id="basic-default-qa" placeholder="MBBS"
                                    name='dob' wire:model='dob'  style="border:0"/>
                                <small class="text-danger">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Email :</label>

                            <div class="">
                                <input type="email" class="form-control shadow-sm" id="basic-default-name" name='email'
                                    wire:model='email' placeholder="JohnDoe@gmail.com"  style="border:0"/>
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6  p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="  me-0 col-form-label text-white p-0 "
                                                    for="basic-default-name">Role :</label>

                                                <div class="  p-0 ps-1">
                                                    <select name="Role" id="role" class="form-select shadow-sm" wire:model='role' style="border:0">
                                                        <option value="">Choose Role</option>
                                                        <option value="receptionist">Receptionist</option>
                                                        <option value="Nurse">Nurse</option>
                                                        <option value="Janitor">Janitor</option>
                                                        <option value="Security">Security</option>
    
                                                       </select>
                                                    <small class="text-danger">
                                                        @error('role')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6 p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="  col-form-label text-white p-0" for="basic-default-name">gender :</label>

                                                <div class=" p-0 ps-1">
                                                   <select name="gender" id="gender" class="form-select shadow-sm" wire:model='gender' style="border:0">
                                                    <option value="">Choose Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>

                                                   </select>
                                                    <small class="text-danger">
                                                        @error('gender')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
        
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6  p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="  me-0 col-form-label text-white p-0 "
                                                    for="basic-default-name">Phone :</label>

                                                <div class="  p-0 ps-1">
                                                    <input type="text" class="form-control shadow-sm" id="basic-default-name"
                                                        name='phone' wire:model='phone' placeholder="09-*********"  style="border:0"/>
                                                    <small class="text-danger">
                                                        @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6 p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="  col-form-label text-white p-0" for="basic-default-name">Salary :</label>

                                                <div class="  p-0 ps-1">
                                                    <input type="number" class="form-control shadow-sm" id="basic-default-qa"
                                                        placeholder="1*******" name='qualification' wire:model='salary'  style="border:0"/>
                                                    <small class="text-danger">
                                                        @error('salary')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
        
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-message">Note :</label>
                            <div class="">
                                <textarea id="basic-default-message" name='note' class="form-control shadow-sm" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='note' style="border:0"></textarea>
                                <small class="text-danger">
                                    @error('note')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1 d-flex justify-content-between">

                                <button type="submit" class="btn btn-primary border-0 d-flex align-items-center"
                                style="background:#ffffff; color:#bb95dc; border:3px solid #e2dcf8 !important ">
                                    <div>Send</div>

                                    <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                                <button type="reset" class="btn btn-primary border-0 d-flex align-items-center" style="background:#ffffff; color:#bb95dc; border:3px solid #e2dcf8 !important ">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->

    </div>
</div>
