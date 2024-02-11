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
