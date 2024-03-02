
<div>

   
    <style>
        .container{
            color:purple;
        }
        a{
            text-decoration: none;
            color:purple;
        }
        .type{
            padding:5px 10px;
           
        }
        .active{
            border-bottom: 3px solid blueviolet;
            background-color: #00000011;
        }
    </style>
    

<div>
    <h2 class="text-center mt-3">My Appointments</h2>
    <div class="container">
    <!-- <div class="">
        <a href="" class="type active">Past</a>
        <a href="" class="type">Upcoming</a>
    </div> -->
    <hr>
    @foreach($appointments as $a)
    <div class="mt-3 p-5 d-flex align-items-center justify-content-evenly" style="border-radius:5px;background-color:#00000011;">
        <div class="img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEBqYEUHs9SPync2bo8AmdYjzW5WYicOWF8lreCXnMcQ&s" style="width:100px;height:100px;border:2px solid black">
        </div>
        <div style="font-size: 20px;background-color: #00000011;padding:15px 30px;border-radius:10px">
            <div class="mb-3" >
                {{$a->dname}}
            </div>
            <div >
                {{$a->special}}
            </div>
        </div>
        <div style="font-size: 20px;background-color: #00000011;padding:15px 30px;border-radius:10px">
            <div class="mb-3" >
                {{$a->appointment_date}}
            </div>
            <div >
                {{$a->appointment_day}}
            </div>
        </div>
        <div>
            <div class="btn btn-sm {{$a->status=='approved' ? 'btn-success' : 'btn-warning'}}">{{$a->status == 'approved' ? 'Approved' :'Pending' }}</div>
            <div class='btn btn-sm mt-2 btn-danger d-block'>Cancel Appointment</div>
        </div>
    </div>
@endforeach
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
    </div>