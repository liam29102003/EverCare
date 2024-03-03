<div class="container p-3 text-center d-flex">
    @if(session('message'))
    <div x-data='{open:true}' x-init="setTimeout(() => { open = false; }, 5000)">
    <div   x-show="open" x-bind:class='{"d-block":open}' class="bs-toast toast toast-placement-ex m-2  bg-success" style="postion:absolute; top:0; right:0"  role="alert" aria-live="assertive"
    aria-atomic="true" data-delay="2000">
    <div class="toast-header ">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Success</div>
        <small>Just Now</small>
        <button type="button" @click=" open = !open " class="btn-close" 
            aria-label="Close">HW</button>
    </div>
    <div class="toast-body">{{session('message')}}</div>
</div>
</div>
    @endif

    <div class='w-50' style='border-right:1px solid black;'>
    <div class='d-flex align-items-center'>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1VYb1hcJGzN6zutXqU07_AbsgxBd7w17XyQ&usqp=CAU" style='width:200px;height:200px' alt="">
        <div style='color:black;font-size:20px; font-weight:bold'>Kpay</div>
    </div>
    <div class='d-flex align-items-center'>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1VYb1hcJGzN6zutXqU07_AbsgxBd7w17XyQ&usqp=CAU" style='width:200px;height:200px' alt="">
        <div style='color:black;font-size:20px; font-weight:bold'>Wave Money</div>
    </div>
    <div class='d-flex align-items-center'>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1VYb1hcJGzN6zutXqU07_AbsgxBd7w17XyQ&usqp=CAU" style='width:200px;height:200px' alt="">
        <div style='color:black;font-size:20px; font-weight:bold'>MAB pay</div>
    </div>
    </div>
    <div class='w-50 p-5'>
        <h3 class='mb-3'>Upload photo that you have pay for appointment. </h3>
    @if ($image)
        <img src="{{ $image->temporaryUrl() }}" style='width:300px;height:300px'>
    @endif
    <input type="file" name="" wire:model='image' id="" class='form-control'>
    <label for="">Symptoms</label>
    <textarea name="" wire:model='symptom' id="" cols="30" rows="10">

    </textarea>
    
    <button wire:click='uploadImg' class='btn btn-primary mt-3'>Upload pay image</button>

    </div>

</div>

