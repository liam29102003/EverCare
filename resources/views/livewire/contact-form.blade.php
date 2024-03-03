
<div>
<head>
    
    <style>
        
.whole_container{
    padding:50px;
}
.grid-container{
    background-color: #c296eacc;
    border-radius: 10px;
    display:flex;
    flex-wrap: wrap;
    justify-content: center;
color:white;
}
.first-section,.second-section  {
    /* width: 50%; */
    padding:30px
}

@media(max-width:978px){
    .first-section  {
        width: 100%;
        padding:150px
    }
    .second-section  {
        width: 100%;
        padding:10px
    }
}
    </style>
</head>
<body>
@if(session('status'))
<livewire:alert>
@endif
     
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="first-section p-3">
                        <div class="text">
                            <h3 style="color:#bb95dc">Just say as Hello !</h3>
                            <small style="color:#bb95dc">Let's us know about you</small>
                        </div>
    
                            <select wire:model="reason" id="" class="form-select">
                                <option value="">Choose Reason for contact</option>
                                <option value="sponsorship">Sponsorship</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                            @error('reason')
                                <span class='text-danger'>{{$message}}</span>
                            @enderror
                            <div class="d-flex gap-2">
                                <div style='width:50%'>
                                <input class="form-control border-0 shadow-sm mt-3" type="text" wire:model='name' name="user_name" placeholder="Your name">
                                @error('name')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                </div>
                                
                                <div style='width:50%'>
                                <input class="form-control border-0 shadow-sm mt-3" type="email" wire:model="email" id="" placeholder="Email">
                                
                                @error('email')
                                <span class='text-danger'>{{$message}}</span>
                            @enderror
                                </div>
                            </div>
    
                               
                            <input class="form-control border-0 shadow-sm mt-3" type="number" wire:model="phone" id="" placeholder="Phone">
                            @error('phone')
                                <span class='text-danger'>{{$message}}</span>
                            @enderror
                            <!-- <input type="textarea" class="mform-md-3" name="message" id="" style="height: 5rem;" placeholder="Message"> -->
                            <textarea class="form-control border-0 shadow-sm mt-3"  wire:model="message" id=""placeholder="Message"></textarea>
                            @error('message')
                                <span class='text-danger'>{{$message}}</span>
                            @enderror
                            <input type="submit" class="btn mt-3 px-5" value="Submit" wire:click='sendMessage' name="submit_btn" style="background-color: #bb95dc; color:white">
                        
                    </div>
                </div>
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
