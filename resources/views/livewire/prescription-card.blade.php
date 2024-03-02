<div class="container">
   <div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="card p-3 mt-3 " style="background-color: white; color: #bb95dc">
            <div class="p-2" style="border: 2px dashed #bb95dc">
                <div class="px-4">   
                    <strong>Patient Id : </strong><span>{{$prescription->patient->id}}</span>
                    <br>
                    <strong>Name : </strong><span>{{$prescription->patient->name}}</span>
                    <br>
                    <strong>Doctor : </strong><span>{{$prescription->doctor->name}}</span>
                    <br>
                    <strong>Date : </strong><span>{{$prescription->created_at}}</span>
    
                </div>
                <hr>
                @foreach ($prescription->prescription as $medicine)
                    <livewire:each-medicine :medicine="$medicine" :key="$medicine->id" :mr_id="$prescription->id"/>
                @endforeach
                <hr>
                
                <div class="d-flex justify-content-between mb-2 px-4">
                    <a wire:click='delete' href="{{route('receptionist.prescription.list')}}" wire:navigate  class="btn   "  style="background-color: #bb95dc; color:white">Back</a>
                    <a href="{{route('cart')}}" wire:navigate class="btn   " style="background-color: #bb95dc; color:white"><i class="fa-solid fa-cart-shopping"></i></a>
    
                </div>
            </div>
            
        </div>
    </div>
   </div>
   <div>
    
   </div>
    
</div>
