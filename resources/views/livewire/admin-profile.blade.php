
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
	background-color: #bb95dccc;
}
.card-body{

	padding:20px;
	border-radius:50px;
	background-color: #f7f7ff;
}
.me-2 {
    margin-right: .5rem!important;
}
    </style>
</div>
<div>
	@if(session('status'))
	<div class="alert alert-success w-50 alert-dismissible fade show" role="alert"> {{session('status')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
	@endif
	<a href="{{route('admin#dashboard')}}" class='btn m-3 px-5 pfbtn' wire:navigate>Back</a>
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body" >
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>{{Auth::user()->name}}</h4>
									<!-- <p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
								</div>
							</div>
							<hr class="my-4">
							
						</div>
					</div>
				</div>
				<form action="" wire:submit.prevent='save'  class="col-lg-8">
					@csrf
				<div>
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" wire:model='name' name='name' value="{{Auth::user()->name}}">
									
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{Auth::user()->email}}" disabled>
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