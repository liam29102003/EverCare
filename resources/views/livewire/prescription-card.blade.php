<div class="container">
   <div class="row">
    <div class="col-8 offset-2">
        <div class="card mt-3 pt-3">
            <div class="px-4">   
                <strong>Name : </strong><span>{{$prescription->patient->name}}</span>
            </div>
            <hr>
            @foreach ($prescription->prescription as $medicine)
                <livewire:each-medicine :medicine="$medicine" :key="$medicine->id" />
            @endforeach
            <hr>
            
            <div class="d-flex justify-content-between mb-2 px-4">
                <a href="{{route('receptionist.prescription.list')}}" wire:navigate class="btn  btn-primary " >Back</a>
                <a href="{{route('cart')}}" wire:navigate class="btn  btn-primary "><i class="fa-solid fa-cart-shopping"></i></a>

            </div>
        </div>
    </div>
   </div>
   <div>
    
   </div>
    
</div>
