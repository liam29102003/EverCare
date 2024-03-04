<div>
    <style>
        .ww:hover{

        transform: scale(3);
        z-index: 100;
        }
    </style>
    @if(session('success'))
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
    <div class="toast-body">{{session('success')}}</div>
</div>
</div>
    @endif
        <table class="table mt-3" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" >Appointment ID </th>                    
                    <th style="color:#bb95dc" >Name </th>                    
                    <th style="color:#bb95dc" >Phone</th>
                    <th style="color:#bb95dc" >Image</th>
                    <th style="color:#bb95dc">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $a)
                <tr style=" background-color:#bb95dc" class="shadow">
                    <th style="color:  #e2dcf8" >{{$a->id}} </th>                    
                    <th style="color: #e2dcf8" >{{$a->name}} </th>                    
                    <th style="color: #e2dcf8" >{{$a->phone}}</th>
                    <th style="color: #e2dcf8" >
                    <img src="{{asset('storage/payment/'.$a->image)}}" class="ww" style='width:100px;' alt="">
                </th>
                    <th style="color: #e2dcf8">
                    <!-- <button wire:click="approve({{$a->id}})" class="btn btn-sm btn-success">Approve</button> -->
                    <a href="{{route('approve.app.mail',['email'=>$a->email,'id'=>$a->id])}}"  class="btn btn-sm btn-primary">Approve</a>
                    <a href="{{route('cancel.app.mail',['email'=>$a->email,'id'=>$a->id])}}"  class="btn btn-sm btn-danger">Cancel</a>
                </th>
                </tr>
                @endforeach
            </tbody>
        </table>

</div>
