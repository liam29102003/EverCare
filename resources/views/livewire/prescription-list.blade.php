<div class="container">
    <div class="row">
        @foreach ($prescriptions as $prescription)
        <div class="col-sm-6 mt-3">
            <div class="card px-3 py-2" style="background-color: #bb95dc; color:white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div><span>Name : </span><span>{{$prescription->patient->name}}</span></div>
                        <div><span>Doctor Name : </span><span>Dr. Tun Lin</span></div>

                    </div>
                    <div>
                        <a href="{{route('receptionist.prescription.detail',$prescription->id)}}" wire:navigate class="btn btn-outline-light btn-sm"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
       
    </div>
</div>