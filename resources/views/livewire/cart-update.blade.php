<tr style="border-top:2px solid #FFFEF2; border-bottom:2px solid #FFFEF2; border-top:0;" class="shadow-sm mb-3">
    <td style="width:25%">
        {{-- <img src="" alt="" width="30" class="rounded-circle me-2"> --}}
        <strong>{{ $name }}</strong>
    </td>
    <td class="" style="width:200px">
        <div class="input-group mb-3 w-75 m-auto text-center">
            <input type="button" class="input-group-text btn" value="-">
            <input type="text" wire:model.live='quantity' class="form-control text-center" aria-label=""
                style="border: 1px solid gray !important">
            <input type="button" wire:click='increment' class="input-group-text btn " value="+">
        </div>
    </td>
    <td style="width:25%" class="text-center">{{ $price * $quantity }}</td>
    <td style="width:25%">
        <button type="button" wire:click='delete' class="btn text-danger">
            <i class="fa-solid fa-trash"></i></button>

    </td>
</tr>
{{-- <td style="width:25%" class="text-center">{{$price * $quantity }}</td> --}}
