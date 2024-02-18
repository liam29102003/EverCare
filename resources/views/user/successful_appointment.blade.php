
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-color: #fff;
            color:#8f65dc;
        }
        .successAppImg{
            width:100px;
            height:100px;
        }
        li{
            text-align:left;
        }
    </style>
</head>
<body>
    <div style="height: auto;width:70%;padding:50px;border-radius:15px;" class="mt-5 container text-center d-flex flex-column justify-content-center align-items-center">
        <div class=""><img src="https://freepngimg.com/download/success/6-2-success-png-image.png" class="successAppImg"/></div>
        <div class="mt-3 fw-bold">Your <strong>{{$data['treatment_type']}}</strong> appointment booked successfully!</div>
        @if($data['treatment_type'] == 'online')
        <div class="mt-1">Read the online consultation steps carefully described below.</div>
        @else
        <div class="mt-1">Here is your appointment informations!</div>
        @endif
        <div class="mt-3 w-100 d-flex justify-content-center">
            <table class="w-100" border="1">
                <tr>
                    <td class="p-2" style="border-right:1px solid black;font-weight:bold">Doctor</td>
                    <td class="p-2" style="border-right:1px solid black;font-weight:bold">Date & Time</td>
                    <td class="p-2" style="border-right:1px solid black;font-weight:bold">Patient Name</td>
                </tr>
                <tr>
                    <td class="p-2" style="border-right:1px solid black">
                    {{$doctor[0]->name}} <div class='fw-bold'>({{$doctor[0]->speciality}})</div>
                </td>
                    <td class="p-2" style="border-right:1px solid black">{{$data['appointment_date']}}</td>
                    <td class="p-2" style="border-right:1px solid black">{{$data['name']}}</td>
                </tr>
            </table>
        </div>
        <a href="{{route('home')}}" class="btn btn-success mt-3">Go Home</a>

        @if($data['treatment_type'] == 'online')
        <div class="card mt-3">
    <div class="card-header">
        <h5 class="card-title">Online Consultation Guidelines</h5>
    </div>
    <div class="card-body">
        <ol>
            <li>Book an appointment by selecting a convenient time slot.</li>
            <li>Ensure you have a stable internet connection.</li>
            <li>Find a quiet and well-lit space for the consultation.</li>
            <li>Log in to the consultation platform at least 5 minutes before the scheduled time.</li>
            <li>Wait for the consultant to join the session.</li>
            <li>During the consultation, communicate clearly and provide necessary information.</li>
            <li>Respect the consultant's time and adhere to the allocated duration.</li>
            <li>Follow any post-consultation instructions provided by the consultant.</li>
        </ol>
        <hr>
        <p><strong>Rules:</strong></p>
        <ul>
            <li>Be respectful and courteous towards the consultant and other participants.</li>
            <li>Avoid sharing sensitive or personal information in a public chat.</li>
            <li>Comply with the platform's terms of service and guidelines.</li>
            <li>Do not engage in any illegal or inappropriate behavior during the consultation.</li>
            <li>Report any technical issues or concerns to the platform support team.</li>
        </ul>
    </div>
</div>
        @endif

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>