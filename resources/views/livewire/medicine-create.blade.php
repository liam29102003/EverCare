<div class="container-fluid flex-grow-1 container-p-y " >
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3" >
            <div class="card mb-4" style="background-color:#F6E8B1 !important; color:#9d926a !important" >
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h5 class="mb-0">Add Medicine</h5>
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
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Image :</label>

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
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Name :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe" />
                                <small class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </small>

                        </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>price :</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="basic-default-name" name='price'
                                    wire:model='price' placeholder="JohnDoe@gmail.com" />
                                <small class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Quantity :</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="basic-default-name" name='Quantity'
                                    wire:model='quantity' placeholder="" />
                                <small class="text-danger">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-stethoscope me-2"></i>Manufacture</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-Manufacture"
                                    placeholder="Neurologist" name='manufacturer' wire:model='manufacturer' />
                                <small class="text-danger">
                                    @error('manufacturer')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-graduation-cap "></i>Side Effect :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-qa" placeholder="MBBS"
                                    name='side' wire:model='side' />
                                <small class="text-danger">
                                    @error('side')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>


                        
                        



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-message"><i
                                    class="fa-regular fa-file-lines me-2"></i>Description :</label>
                            <div class="col-sm-9">
                                <textarea id="basic-default-message" name='description' class="form-control" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='description'></textarea>
                                <small class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9 ">
                                <button type="submit" class="btn btn-primary border-0 d-flex align-items-center"
                                    style="background: #D4CAA3 ">
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
