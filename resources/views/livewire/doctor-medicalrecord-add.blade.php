<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card" style="background-color:#bb95dc; color:#ffffff !important">
                <div class="card-body">
                    <form action="" class="form">
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">


                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Name :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='note'
                                        value="{{session()->get('name')}}" placeholder="John Doe"  style='border:0' />
                                    <small class="text-danger">
                                        @error('note')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">


                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Note :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='note'
                                        wire:model='note' placeholder="John Doe"  style='border:0' />
                                    <small class="text-danger">
                                        @error('note')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">


                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>Diet :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='diet'
                                        wire:model='diet' placeholder="John Doe"  style='border:0' />
                                    <small class="text-danger">
                                        @error('diet')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">


                                <label class=" col-form-label text-white" for="basic-default-name"><i
                                        class="fa-solid fa-signature me-2"></i>note :</label>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm" id="basic-default-name" name='note'
                                        wire:model='note' placeholder="John Doe"  style='border:0' />
                                    <small class="text-danger">
                                        @error('note')
                                            {{ $message }}
                                        @enderror
                                    </small>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
