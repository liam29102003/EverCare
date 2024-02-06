<div class="container-fluid flex-grow-1 container-p-y ">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3 ">
            <div class="card mb-4" style="background:#F6E8B1;">
                <div class="card-header text-center pb-0"><h3 class="mb-0" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#9d926a">Edit Doctor</h3></div>

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
                                @else
                                <img src="{{asset('storage/'.$doctor->image)}}"  alt="">
                                    
                            @endif

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Image :</label>

                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="basic-default-name" name='image'
                                    wire:model='image' placeholder="John Doe" value="{{$doctor->image}}/>
                                <small class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Name :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe" value="{{$doctor->name}}"/>
                                <small class="text-danger">
                                    @error('name')
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
                                    wire:model='email' placeholder="JohnDoe@gmail.com" value="{{$doctor->email}}"/>
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Phone :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='phone'
                                    wire:model='phone' placeholder="09-*********" value="{{$doctor->phone}}"/>
                                <small class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-stethoscope me-2"></i>Speciality :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-speciality"
                                    placeholder="Neurologist" name='speciality' wire:model='speciality'value="{{$doctor->speciality}}" />
                                <small class="text-danger">
                                    @error('speciality')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-graduation-cap "></i>Qualification :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-qa" placeholder="MBBS"
                                    name='qualification' wire:model='qualification' value="{{$doctor->qualification}}"/>
                                <small class="text-danger">
                                    @error('qualification')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-phone"><i
                                    class="fa-solid fa-venus-mars me-2"></i>Gender :</label>

                            <div class="col-sm-9">
                                <select name="gender" id="" class="form-control" wire:model='gender'>
                                    @if ($doctor->gender === 'male')
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                    @else
                                    <option value="male">Male</option>
                                    <option value="female" selected>Female</option>
                                    @endif
                                   
                                </select>
                                <small class="text-danger">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-message"><i
                                    class="fa-regular fa-file-lines me-2"></i>Bio :</label>
                            <div class="col-sm-9">
                                <textarea id="basic-default-message" name='bio' class="form-control" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='bio'>{{$doctor->bio}}</textarea>
                                <small class="text-danger">
                                    @error('bio')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9 ">
                                <button type="submit" class="btn btn-primary border-0 d-flex align-items-center"
                                style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
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