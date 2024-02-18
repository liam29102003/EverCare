<div class="container-fluid flex-grow-1 container-p-y" style="background-color:">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-lg-6 offset-lg-3">
            <div class="card mb-4" style="background-color:#bb95dc; color:#ffffff !important">
                <div class="card-header text-center pb-0">
                    <h3 class="mb-0 text-white"
                        style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#9d926a">
                        Edit Doctor</h3>
                </div>

                <div class="card-body">
                    <form method="post" wire:submit='save({{$doctor->id}})' action="" enctype="multipart/form-data">
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


                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Image :</label>

                                <div class="">
                                    <input type="file" class="form-control shadow-sm" id="basic-default-name" name='image'
                                        wire:model='image' placeholder="John Doe"  style='border:0' />
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

                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Name :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='name'
                                        wire:model='name' placeholder="John Doe" style='border:0' value="{{ $doctor->name }}" />
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

                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Email :</label>

                                <div class="">
                                    <input type="email" class="form-control shadow-sm" id="basic-default-name" name='email'
                                        wire:model='email' placeholder="JohnDoe@gmail.com"  style='border:0' value="{{ $doctor->email }}" />
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

                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Phone :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='phone'
                                        wire:model='phone' placeholder="09-*********"  style='border:0' value="{{ $doctor->phone }}" />
                                    <small class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1 d-flex justify-content-between">
                                <div class="w-75">
                                    <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Exp :</label>

                                <div class="">
                                    <input type="number" class="form-control shadow-sm" id="basic-default-name" name='exp'
                                        wire:model='exp' placeholder="1-"  style='border:0' value="{{ $doctor->exp }}" />
                                    <small class="text-danger">
                                        @error('exp')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                                </div>
                              <div class="w-50 ms-2">
                                <label class=" col-form-label text-white" for="basic-default-phone"><i
                                    class="fa-solid fa-venus-mars me-2"></i>Gender :</label>

                            <div class="">
                                <select name="gender" id="" class="form-select shadow-sm" wire:model='gender' style='border:0'>
                                    <option value="male" @if($doctor->gender === 'male') selected @endif>Male</option>
                                    <option value="female" @if($doctor->gender === 'female') selected @endif>Female</option>
                                    <option value="other" @if($doctor->gender === 'other') selected @endif>Other</option>

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

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-stethoscope me-2"></i>Speciality :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-speciality"
                                        placeholder="Neurologist" name='speciality' wire:model='speciality'  style='border:0' value="{{ $doctor->speciality }}" />
                                    <small class="text-danger">
                                        @error('speciality')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-graduation-cap "></i>Qualification:</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-qa"
                                        placeholder="MBBS" name='qualification' wire:model='qualification'  style='border:0' value="{{ $doctor->qualification }}" />
                                    <small class="text-danger">
                                        @error('qualification')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>
                        </div>


{{-- 
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                               
                            </div>
                        </div> --}}



                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <label class=" col-form-label text-white" for="basic-default-message"><i
                                        class="fa-regular fa-file-lines me-2"></i>Bio :</label>
                                <div class="">
                                    <textarea id="basic-default-message" name='bio' class="form-control shadow-sm" placeholder="Brief Description Go Here"
                                        aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                        wire:model='bio' style='border:0'>{{$doctor->bio}}</textarea>
                                    <small class="text-danger">
                                        @error('bio')
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
