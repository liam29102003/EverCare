
<div>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Messages</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h3 {
  text-align: center;
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
    <h3>Contact Messages</h3>

       <div class="">
       <select wire:model.live='reason' id="" class='form-select w-50'>
            <option value="">All Messages</option>
            <option value="sponsorship">Sponsorship</option>
            <option value="advertisement">Advertisement</option>
            <option value="other">Other</option>
        </select>
       </div>

    <div class="messages">
        @if(count($contacts))
        @foreach($contacts as $c)
      <div class="message">
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
      </div>
      @endforeach
      @else
        <span>There is no {{$reason}} message to show.</span>
      @endif
      <!-- More messages can be added here -->
      
    </div>
  </div>
</body>
</div>
