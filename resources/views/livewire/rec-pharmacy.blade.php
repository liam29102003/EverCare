
        <div class="col-md-3 mb-3" >
            <div class="mb-2 mt-2 w-50" style="margin: auto">
                @if (session('status'))
                {{-- <h1>Helo</h1> --}}
                    <livewire:alert>
                @endif
            </div>
            <div class="card m-auto shadow-lg" style="max-width: 250px; border-radius: 15px; background-color:#F6E8B1; color:#9d926a;">
                <img src="{{ asset('storage/' . $pharmacy->image) }}" height="150" alt="Medicine Image" class="card-img-top" style="border-radius: 15px 15px 0 0;">
                <div class="card-body px-3 pt-2">
                    <h5 class="card-title text-primary mb-1 ">{{$pharmacy->name}}</h5>
                    <p class="card-text mb-1">Price: <span id="price">{{$pharmacy->price}}MMK</span></p>
                    <div class="input-group mb-2">
                        <input type="number" wire:model.live='quantity' class="form-control form-control-sm text-center" id="quantity" value="1" min="1" max="10" style="background: #f5f5f5; border: 1px solid #ddd;">
                        <div class="input-group-append">
                            <button class="btn btn-sm" id="plus-btn" wire:click='increment' style="background-color:#9d926a !important; color:#F6E8B1">+</button>
                            <button class="btn  btn-sm" id="minus-btn" wire:click='decrement' style="background-color:#9d926a !important; color:#F6E8B1">-</button>
                        </div>
                    </div>
                    <button type="button" wire:click="addToCart" class="btn btn-block btn-sm" id="add-to-cart" style="background-color:#9d926a !important; color:#F6E8B1">{{$text}}</button>
                </div>
            </div>
        </div>
       
        {{-- <div>
          
        </div> --}}
       