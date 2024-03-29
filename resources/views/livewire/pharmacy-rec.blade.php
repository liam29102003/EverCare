<div>
    <div class="mt-3   me-2 d-flex align-items-center text-end justify-content-between">

        <a href="{{ route('cart') }}" wire:navigate type="button" class="btn btn-sm ms-4 position-relative"
            style="background:#bb95dc; color:#ffffff; border-color:#ffffff !important ">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
               {{$count}}

                <span class="visually-hidden">unread messages</span>
            </span>
        </a>
    
        <div class="d-flex align-items-center">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="form-control  ms-2 " wire:model.live="search" placeholder="Search.....">
        </div>
    
    </div>
    <div class="container-fluid py-2">
    
    
        <div class="row">
            @foreach ($pharmacies as $pharmacy)
                <livewire:rec-pharmacy :key="$pharmacy->id" :pharmacy="$pharmacy" :count="$count"/>
            @endforeach
    
        </div>
    </div>
    
</div>
