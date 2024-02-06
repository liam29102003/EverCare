<div class="container-fluid flex-grow-1 container-p-y " >
    {{-- <h4 class="fw-bold py-3 mb-4">Appointment Form</h4> --}}


    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3" >
            <div class="card mb-4" style="background-color:#F6E8B1 !important; color:#9d926a !important" >
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h5 class="mb-0">Add Expense</h5>
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
                                    class="fa-solid fa-signature me-2"></i>Amount :</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="basic-default-name" name='price'
                                    wire:model='amount' placeholder="1*****MMK" />
                                <small class="text-danger">
                                    @error('amount')
                                        {{ $message }}
                                    @enderror
                                </small>

                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9 ">
                                <button type="submit" class="btn btn-primary  d-flex align-items-center"
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
