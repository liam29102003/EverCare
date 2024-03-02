
<div>

  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* .container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
} */

h3 {
  text-align: center;
}
.unread{
  border:2px solid red;
}
.messages {
  margin-top: 20px;
}

.message {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 10px;
  background-color:#bb95dc55;

}

.message-info {
  margin-bottom: 10px;
}

.message-content {
  border-top: 2px solid #bb95dc;
  padding-top: 10px;
}

.info {
  display: block;
  margin-bottom: 5px;
}

.label {
  font-weight: bold;
}

.value {
  margin-left: 5px;
}
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col mt-3">
        <h3>Contact Messages</h3>

        <div class="">
        <select wire:model.live='reason' id="" class='form-select w-50'>
             <option value="">All Messages</option>
             <option value="sponsorship">Sponsorship</option>
             <option value="advertisement">Advertisement</option>
             <option value="other">Other</option>
         </select>
        </div>
      </div>
    </div>
    <div class="row">
      @if(count($contacts))
      @foreach($contacts as $c)
    {{-- <div class="message">
      <div class="message-info">  
        <div class="info">
          <span class="label">Name:</span>
          <span class="value">{{$c->name}}</span>
        </div>
        <div class="info">
          <span class="label">Email:</span>
          <span class="value">{{$c->email}}</span>
        </div>
        <div class="info">
          <span class="label">Date:</span>
          <span class="value">{{$c->created_at}}</span>
        </div>
        <div class="info">
          <span class="label">Reason for Contact:</span>
          <span class="value">{{$c->reason}}</span>
        </div>
      </div>
      <div class="message-content">
        <div class="info">
          <span class="label">Message:</span>
          <span class="value">{{$c->message}}</span>
        </div>
      </div>
    </div> --}}
    <div class="col-sm-6 mt-3">
      <div @if($c->view == 0) class="card px-3 py-2 unread" @else class="card px-3 py-2 " @endif  style="background-color: #bb95dc; color:white;  ">
          <div class="d-flex justify-content-between align-items-center">
              <div>
                  <div><span>Name : </span><span>{{$c->name}}</span></div>
                  <div><span>Reason :  </span><span>{{$c->reason}}</span></div>

              </div>
              <div>
                  <button  wire:click='message({{$c->id}})' class="btn btn-outline-light btn-sm"><i class="fa-solid fa-arrow-right"></i></button>
              </div>
          </div>
          
      </div>
  </div>
    @endforeach

    @else
      <span>There is no {{$reason}} message to show.</span>
    @endif
    </div>
   

    <div class="messages">
      
      <!-- More messages can be added here -->
      
    </div>
  </div>
{{-- </body> --}}
</div>
