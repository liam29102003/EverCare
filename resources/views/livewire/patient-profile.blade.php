<div>

    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            body {
                background: #f7f7ff;
                margin-top: 20px;
            }
			.btn{
				background-color: white;

			}
			.navBtn{
				background-color: #bb95dc;
				color: white;
				border: 2px solid white
			}
            .pfbtn {
                background-color: #bb95dc;
                color: white;
            }

            .pfbtn:hover {
                background-color: #bb95dcdd;
                font-weight: bold;
                color: white;
            }

            .card {
				/* border: 0; */
                
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid transparent;
                border-radius: 10px;
                margin-bottom: 1.5rem;
                /* box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%); */
                background-color: #fff;
            }

            .card-body {

                padding: 20px;
                border-radius: 10px;
                background-color: #fff;
            }

            .me-2 {
                margin-right: .5rem !important;
            }
			
        </style>


   
        {{-- @if (session('status')) 
		<div class="d-flex justify-content-center">
			<div class="alert alert-success w-50 alert-dismissible fade show" role="alert"> {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
		</div>
            
         @endif --}}
		{{-- <div class="mb-2 mt-5 w-50" style="margin: auto">
			@if (session('status'))
				<livewire:alert>
			@endif
		</div> --}}
        <a href="{{ route('home') }}" class='btn m-3 mt-5 px-5 pfbtn' wire:navigate>Back</a>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
									@if (session('status')) 
		<div class="d-flex justify-content-center">
			<div class="alert alert-success  alert-dismissible fade show" role="alert"> {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
		</div>
		@endif
                                    @if (session('gender') == 'male')
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin"
                                            class="rounded-circle p-1 bg-primary" width="110">
                                    @else
                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/004/899/680/small_2x/beautiful-blonde-woman-with-makeup-avatar-for-a-beauty-salon-illustration-in-the-cartoon-style-vector.jpg"
                                            alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    @endif
                                    <div class="mt-3">
                                        <h4>{{ $name }}</h4>
                                        <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
         <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    </div>
                                </div>
                                <hr class="">
								<button wire:click='updatePassword' type="submit" class="btn btn-primary mx-auto  d-flex align-items-center"
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div>Update Password</div>

                            <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                                
                            </div>
                        </div>
						{{-- @if($showUpdatePassword) --}}
					<div class="card" style="background-color: #f7f7ff">
						<livewire:update-password :email="session('email')">
					</div>
					{{-- @endif --}}
                    </div>
                    <form action="" wire:submit.prevent='save' class="col-lg-8">
                        @csrf
                        <div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control border-0 shadow-sm" wire:model='name'
                                                name='name' value="{{ $name }}">
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control border-0 shadow-sm" value="{{ session('email') }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control border-0 shadow-sm" wire:model='phone'
                                                value="{{ $phone }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Gender</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control border-0 shadow-sm" wire:model='gender'
                                                value="{{ $gender }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">DOB</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="date" class="form-control border-0 shadow-sm" wire:model='dob'
                                                value="{{ $dob }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control border-0 shadow-sm" wire:model='address'
                                                value="{{ $address }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn px-4 pfbtn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        @livewireScripts()
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

</div>
