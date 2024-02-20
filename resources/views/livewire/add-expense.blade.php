<div class="container-fluid flex-grow-1 container-p-y " >
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3" >
            <div class="card mb-4" style="background-color:#bb95dc !important; color:#ffffff !important" >
                <div class="card-header d-flex align-items-center justify-content-center pb-0">
                    <h5 class="mb-0 text-white fs-3">Add Expense</h5>
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

                        


                      
                     
                       
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Name :</label>

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
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">

                            <label class=" col-form-label text-white" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Amount :</label>

                            <div class="">
                                <input type="number" class="form-control shadow-sm" id="basic-default-name" name='price'
                                    wire:model='amount' placeholder="1*****MMK" style="border: 0"/>
                                <small class="text-danger">
                                    @error('amount')
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
