<div class="container">
    <div class="row">
        @foreach ($prescriptions as $prescription)
        <div class="col-6 mt-3">
            <div class="card px-3 py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div><span>Name : </span><span>{{$prescription->patient->name}}</span></div>
                        <div><span>Doctor Name : </span><span>Dr. Tun Lin</span></div>

                    </div>
                    <div>
                        <a href="{{route('receptionist.prescription.detail',$prescription->id)}}" wire:navigate class="btn btn-primary btn-sm">CheckOut</a>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
       
    </div>
</div>