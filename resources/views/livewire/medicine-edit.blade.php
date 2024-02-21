<div class="container-fluid flex-grow-1 container-p-y ">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3">
            <div class="card mb-4" style="background:#bb95dc;">
                <div class="card-header text-center pb-0"><h3 class="mb-0" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:white">Edit Medicine</h3></div>

                <div class="card-body">
                    <form method="post" wire:submit='save({{$medicine->id}})' action="" enctype="multipart/form-data">
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
                                <img src="{{asset('storage/'.$medicine->image)}}"  alt="">
                                    
                            @endif

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Image :</label>

                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="basic-default-name" name='image'
                                    wire:model='image' placeholder="John Doe" value="{{$medicine->image}}/>
                                <small class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Name :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe" value="{{$medicine->name}}"/>
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Price :</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="basic-default-name" name='number'
                                    wire:model='number' placeholder="JohnDoe@gmail.com" value="{{$medicine->price}}"/>
                                <small class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Quantity :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='phone'
                                    wire:model='quantity' placeholder="09-*********" value="{{$medicine->quantity}}"/>
                                <small class="text-danger">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name" style="font-size:10px"><i
                                    class="fa-solid fa-signature me-2" ></i>Manufacturer:</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='manufacturer'
                                    wire:model='manufacturer' placeholder="" value="{{$medicine->manufacturer}}"/>
                                <small class="text-danger">
                                    @error('manufacturer')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>SideEffect :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='side'
                                    wire:model='side' placeholder="" value="{{$medicine->side}}"/>
                                <small class="text-danger">
                                    @error('side')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-white" for="basic-default-message"><i
                                    class="fa-regular fa-file-lines me-2"></i>Description :</label>
                            <div class="col-sm-9">
                                <textarea id="basic-default-message" name='bio' class="form-control" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='description'>{{$medicine->description}}</textarea>
                                <small class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </small>

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