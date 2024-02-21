<tr style="border-top:2px solid #ffffff; " class="shadow-sm mb-3">
    <td style="width:25%">
        {{-- <img src="" alt="" width="30" class="rounded-circle me-2"> --}}
        <strong class="text-white">{{ $name }}</strong>
    </td>
    <td class="" style="width:200px">
        <div class="input-group mb-3 w-75 m-auto text-center">
            <input type="button" class="input-group-text btn text-white" value="-"  style="color:white; border:2px solid white !important">
            <input type="text" wire:model.live='quantity' class="form-control text-center" aria-label=""
                style="border: 1px solid #ffffff !important">
            <input type="button" wire:click='increment' class="input-group-text btn text-white " value="+" style="color:white; border:2px solid white !important"> 

        </div>
    </td>
    <td style="width:25%" class="text-center text-white">{{ $price * $quantity }}</td>
    <td style="width:25%">
        <button type="button" wire:click='delete' class="btn text-white">
            <i class="fa-solid fa-trash"></i></button>

    </td>
</tr>
{{-- <td style="width:25%" class="text-center">{{$price * $quantity }}</td> --}}
