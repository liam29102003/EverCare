<div class="container-fluid flex-grow-1 container-p-y ">
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-md-6 offset-md-3">
            <div class="card mb-4" style="background-color:#bb95dc !important; color:#ffffff !important">
                <div class="card-header pb-2 mb-0   d-flex align-items-center justify-content-center">
                    <h3 class="mb-0 text-white">Add Medicine</h3>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form method="post" wire:submit='save' action="" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-2">
                            @if (session('status'))
                                <livewire:alert>
                            @endif

                        </div>




                        <div class="row mb-2 w-25  p-0 tex-center" style="margin: auto">
                            <div class="spinner-border ms-2 text-secondary text-center mb-2 " wire:loading
                                wire:target='image' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            @if ($image)
                                <img style="border: 5px double; border-radius:10px " class="w-100"
                                    src="{{ $image->temporaryUrl() }}" alt="Image Preview">
                            @endif

                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">
                                <label class=" col-form-label text-white" for="basic-default-name">Image :</label>
                                <br>
                                <div class="">
                                    <input type="file" class="form-control shadow-sm" id="basic-default-name" name='image'
                                        wire:model='image' placeholder="John Doe" style="border: 0"/>
                                    <small class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>


                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">
                                <label class=" col-form-label text-white" for="basic-default-name">Name :</label>
                                <br>
                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='name'
                                        wire:model='name' placeholder="John Doe" style="border: 0"/>
                                    <small class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>

                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">

                                <label class=" col-form-label text-white" for="basic-default-name">price :</label>

                                <div class="">
                                    <input type="number" class="form-control shadow-sm" id="basic-default-name" name='price'
                                        wire:model='price' placeholder="JohnDoe@gmail.com" style="border: 0" />
                                    <small class="text-danger">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Quantity :</label>

                            <div class="">
                                <input type="number" class="form-control shadow-sm" id="basic-default-name" name='Quantity'
                                    wire:model='quantity' placeholder=""      style="border: 0" />
                           <small class="text-danger">
                                    @error('quantity')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Manufacture</label>

                            <div class="">
                                <input type="text" class="form-control shadow-sm" id="basic-default-Manufacture"
                                    placeholder="Neurologist" name='manufacturer' wire:model='manufacturer' style="border: 0"/>
                                <small class="text-danger">
                                    @error('manufacturer')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name">Side Effect :</label>

                            <div class="">
                                <input type="text" class="form-control shadow-sm" id="basic-default-qa" placeholder="MBBS"
    style="border: 0"                                name='side' wire:model='side' />
                                <small class="text-danger">
                                    @error('side')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                            </div>
                        </div>







                        <div class="row mb-2">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-message">Description :</label>
                            <div class="">
                                <textarea id="basic-default-message" name='description' class="form-control shadow-sm" placeholder="Brief Descstyle="border: 0"ription Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"
                                    wire:model='description' style="border: 0"></textarea>
                                <small class="text-danger">
                                    @error('description')
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
