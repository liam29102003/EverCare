<div>
    @if (session('status'))
    {{-- <h1>Helo</h1> --}}
        <livewire:alert>
    @endif
    <div class="container">
        <div class="row">
            <p class="col-sm-4">{{$medicine->medicine_name}}</p>
            
            <p class="col-sm-4 text-sm-center">{{$qty}}</p>
            <p class="col-sm-4 text-sm-end">
            @if($exist == 'available')
            <button wire:click='addToCart' class="btn btn-sm " style="background-color: #bb95dc; color:white">Add to Cart</button>
            @elseif($exist == 'error')
            <span class="text-danger">Not Available</span>
            @elseif($exist == 'warning')
            <small class="text-warning">Only {{$existQty}} Available</small>
            <button wire:click='addToCart' class="btn btn-sm " style="background-color: #bb95dc; color:white">Add to Cart</button>
    
    
            @endif
            </p>
        </div>
       
    </div>
  
</div>
