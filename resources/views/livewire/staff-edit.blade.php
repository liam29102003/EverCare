<div class="container-fluid flex-grow-1 container-p-y ">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-md-6 offset-md-3">
            <div class="card mb-4 p-2 p-md-0" style="background-color:#F6E8B1; color:#9d926a !important">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h5 class="mb-0">Add Doctor</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form method="post" wire:submit='save({{$staff->id}})' action="" enctype="multipart/form-data">
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
                                @else
                                <img src="{{asset('storage/'.$staff->image)}}"  alt="">
                                    
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Image :</label>

                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="basic-default-name" name='image'
                                    wire:model='image' placeholder="John Doe" />
                                <small class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name">Name :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe" value="{{$staff->name}}" />
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>
                        

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-stethoscope me-2"></i>Address:</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-address"
                                    placeholder="address" name='address' wire:model='address' value="{{$staff->address}}"/>
                                <small class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-graduation-cap "></i>Qualification</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-qa" placeholder="qualification"
                                    name='qualification' wire:model='qualification' value="{{$staff->qualification}}"/>
                                <small class="text-danger">
                                    @error('qualification')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-graduation-cap "></i>DOB</label>

                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="basic-default-qa" placeholder="MBBS"
                                    name='dob' wire:model='dob' value="{{$staff->dob}}"/>
                                <small class="text-danger">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Email :</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="basic-default-name" name='email'
                                    wire:model='email' placeholder="JohnDoe@gmail.com"value="{{$staff->email}}" />
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>

                       

                        <div class="row mb-3">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6  p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="col-sm-4 text-md-end me-0 col-form-label p-0 "
                                                    for="basic-default-name"><i
                                                    class="fa-solid fa-signature me-2"></i>Role :</label>

                                                <div class="col-sm-8  p-0 ps-1">
                                                    <select name="Role" id="role" class="form-select" wire:model='role'>
                                                        <option value="">Choose Role</option>
                                                        <option value="receptionist" @if($staff->role==="receptionist") selected @endif>Receptionist</option>
                                                        <option value="nurse" @if($staff->role==="nurse") selected @endif>Nurse</option>
                                                        <option value="janitor" @if($staff->role==="janitor") selected @endif>Janitor</option>
                                                        <option value="security" @if($staff->role==="security") selected @endif>Security</option>
    
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
                                                <label class="col-sm-4 text-md-end col-form-label p-0" for="basic-default-name"><i
                                                    class="fa-solid fa-signature me-2"></i>gender :</label>

                                                <div class="col-sm-8 p-0 ps-1">
                                                   <select name="gender" id="gender" class="form-select" wire:model='gender'>
                                                    <option value="">Choose Gender</option>
                                                    <option value="male" @if($staff->gender==="male") selected @endif>Male</option>
                                                    <option value="female" @if($staff->gender==="female") selected @endif>Female</option>
                                                    <option value="other" @if($staff->gender==="other") selected @endif>Other</option>

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
                        
                        <div class="row mb-3">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6  p-0">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <label class="col-sm-4 text-md-end me-0 col-form-label p-0 "
                                                    for="basic-default-name"><i
                                                    class="fa-solid fa-signature me-2"></i>Phone :</label>

                                                <div class="col-sm-8  p-0 ps-1">
                                                    <input type="text" class="form-control" id="basic-default-name"
                                                        name='phone' wire:model='phone' placeholder="09-*********"value="{{$staff->phone}}" />
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
                                                <label class="col-sm-4 text-md-end col-form-label p-0" for="basic-default-name"><i
                                                    class="fa-solid fa-signature me-2"></i>Salary :</label>

                                                <div class="col-sm-8 p-0 ps-1">
                                                    <input type="number" class="form-control" id="basic-default-qa"
                                                        placeholder="1*******" name='qualification' wire:model='salary' value="{{$staff->salary}}"/>
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



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-message"><i
                                    class="fa-regular fa-file-lines me-2"></i>Note :</label>
                            <div class="col-sm-9">
                                <textarea id="basic-default-message" name='note' class="form-control" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='note'></textarea>
                                <small class="text-danger">
                                    @error('note')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9 ">
                                <button type="submit" class="btn btn-primary border-0 d-flex align-items-center"
                                    style="background: #16d4ad">
                                    <div>Send</div>

                                    <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
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
