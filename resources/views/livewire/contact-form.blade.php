
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
    width: 50%;
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
        <div class="whole_container">
            <div class="grid-container  ">
                <div class="first-section p-3">
                    <div class="text">
                        <h3>Just say as Hello !</h3>
                        <small>Let's us know about you</small>
                    </div>

                        <select wire:model="reason" id="" class="form-select">
                            <option value="">Choose Reason for contact</option>
                            <option value="sponsorship">Sponsorship</option>
                            <option value="advertisement">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="d-flex gap-2">
                            <input class="form-control mt-2" type="text" wire:model='name' name="user_name" placeholder="Your name">
                            <input class="form-control mt-2" type="email" wire:model="email" id="" placeholder="Email">
                        </div>

                           
                        <input class="form-control mt-2" type="number" wire:model="phone" id="" placeholder="Phone">

                        <!-- <input type="textarea" class="mform-md-3" name="message" id="" style="height: 5rem;" placeholder="Message"> -->
                        <textarea class="form-control mt-2"  wire:model="message" id=""placeholder="Message"></textarea>
                        <input type="submit" class="btn btn-primary mt-3 px-5" value="Submit" wire:click='sendMessage' name="submit_btn">
                    
                </div>
                <div class="second-section p-5">
                    <div class="contact-info">
                        <div class="text">
                            <h3>Contact Information</h3>
                        </div>
                        <address>27th Parami Street AD Road Yangon, Myanmar</address>
                        <p>Call us: <a href="tel:+959763383499">+959763383499</a></p>
                        <p>We are open from Monday to Friday 08:00AM -05:00PM</p></div>
                    <div class="follow-media">
                        <div class="text" style="padding: 0;"><h3>Follow Us</h3></div>
                        <a href="http://" name="fb_link">Facebook</a>
                        <a href="http://" name="ig_link">Instrgram</a>
                        <a href="http://" name="twt-link">Twitter</a>
                    </div>
                </div>
            </div> 
        </div> 

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
