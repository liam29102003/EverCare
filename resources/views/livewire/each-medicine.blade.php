<div>
    @if (session('status'))
    {{-- <h1>Helo</h1> --}}
        <livewire:alert>
    @endif
    <div class="container">
        <div class="row">
            <p class="col-4">{{$medicine->medicine_name}}</p>
            
            <p class="col-4 text-center">{{$qty}}</p>
            <p class="col-4 text-end">
            @if($exist == 'available')
            <button wire:click='addToCart' class="btn btn-sm btn-primary">Add to Cart</button>
            @elseif($exist == 'error')
            <span class="text-danger">Not Available</span>
            @elseif($exist == 'warning')
            <small class="text-warning">Only {{$existQty}} Available</small>
            <button wire:click='addToCart' class="btn btn-sm btn-primary">Add to Cart</button>
    
    
            @endif
            </p>
        </div>
       
    </div>
  
</div>
