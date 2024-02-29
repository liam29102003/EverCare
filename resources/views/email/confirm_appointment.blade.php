
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .container{
            background-color: #d9bff3aa;
            border-radius: 10px;
        }
    </style>
</head>
<body class='p-3'>
    <div class="container p-5 mt-5 col-8" style='padding:30px'>
        <h3 class="mb-5">Dear {{$name}},</h3>

<div class="" style="font-size:20px">This is a friendly reminder about your upcoming appointment with us at:</div>

<div style="font-size:19px;" class="mt-3 mb-2">Appointment Date: {{$appointment_date}}</div>
<div style="font-size:19px;" class="mb-2">Appointment Time: {{$appointment_day}}</div>
<div style="font-size:19px;" class="mb-2">Doctor    : {{$dname}}</div>

<div>
    <div class="mt-3">
        Thank you for choosing us for your appointment.</div>
       <div class="" style='margin-bottom:20px;'> Please click the confirm button to confirm your appointment.</div>
    <a href="http://localhost:8000/patient/payment/{{$id}}" class=''  style="text-decoration: none; background-color: purple;color:white;padding: 10px 30px;">Confirm Appointment</a>
</div>


<h4 class="mt-5">Best regards,</h4>
<div style="font-size: 17px;">Evercare</div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </html>