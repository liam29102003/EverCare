
<div>
<div>
  
    <style>
        body{
    background: #f7f7ff;
    margin-top:20px;
}
.pfbtn{
	background-color:#bb95dc ;
	color:white;
}
.pfbtn:hover{
	background-color:#bb95dcdd ;
	font-weight:bold;
	color:white;
}
input{
	border: 0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
	/* background-color: #bb95dccc; */
}
.card-body{

	padding:20px;
    border-radius: 10px;
	background-color: #f7f7ff;
}
.me-2 {
    margin-right: .5rem!important;
}
    </style>
</div>
<div>
	{{-- @if(session('status'))
	<livewire:alert :status="session('status')">
	@endif --}}
	<div class="mb-2 mt-2 w-50" style="margin: auto">
		@if (session('status'))
			<livewire:alert>
		@endif
	</div>

    <div class="container mt-3">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body" >
							<div class="d-flex flex-column align-items-center text-center">
								@if(Auth::user()->image=='')
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								@else
								<img src="{{asset('storage/'.Auth::user()->image)}}" alt="Admin" class="rounded-circle" width="210" height='210'>
								@endif
								<div class="mt-3">
									<h4>{{Auth::user()->name}}</h4>
									<!-- <p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
								</div>
							</div>
							{{-- <hr class="my-4"> --}}
							<div class="text-center">
								<!-- <button wire:click='updatePassword' class="btn" style="background-color: #bb95dc; color:#fff">Update Password</button> -->
								<button wire:click='updatePassword' type="submit" class="btn btn-primary mx-auto  d-flex align-items-center"
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div>Update Password</div>

                            <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
							</div>
						
						
							
						</div>
					</div>
					@if($showUpdatePassword)
					<div class="card" style="background-color: #f7f7ff">
						<livewire:update-password />
					</div>
					@endif
				</div>
				<form action="" wire:submit.prevent='saveProfile'  class="col-lg-8">
					@csrf
				<div>
					<div class="card">
						<div class="card-body">
							<div class="row mb-3 ">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Image</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="file" class="form-control border-0 shadow-sm" wire:model='image' name='image' >
									@error('image') <span class="error">{{ $message }}</span> @enderror
								</div>
							</div>
							<div class="row mb-3 ">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control border-0 shadow-sm" wire:model='name' name='name' >
									@error('name') <span class="error">{{ $message }}</span> @enderror
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" wire:model='email' class="form-control border-0 shadow-sm" value="" >
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control border-0 shadow-sm" wire:model='phone' value="">
                                    @error('phone') <span class="error">{{ $message }}</span> @enderror
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Exp</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control border-0 shadow-sm" wire:model='exp' value="">
                                    @error('exp') <span class="error">{{ $message }}</span> @enderror
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">qualification</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control border-0 shadow-sm" wire:model='qualification' value="">
                                    @error('qualification') <span class="error">{{ $message }}</span> @enderror
                                </div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">speciality</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control border-0 shadow-sm" wire:model='speciality_name' value="" disabled>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3 d-flex align-items-center">
									<h6 class="mb-0">Biography</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<textarea name="" id="" wire:model='bio' class='form-control border-0 shadow-sm' cols="30" rows="10"></textarea>
                                    @error('bio') <span class="error">{{ $message }}</span> @enderror
                                </div>
							</div>
							<div class="row">
								<div class="col-sm-3 d-flex align-items-center"></div>
								<div class="col-sm-9 text-secondary">
									{{-- <button type="submit" class="btn px-4 pfbtn" >Save Changes</button> --}}
									<button type="submit" class="btn btn-primary me-2  d-flex align-items-center"
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div>Save Changes</div>

                            <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</form>
			</div>
		</div>
	</div>
	
</div>

</div>