<div class="container">
    <style>
        .card{
            border-radius: 10px !important;
            border:0px;
        }
    </style>
    <div class="row " >
        <div class="col text-center mt-3">
            <h2>{{__('Medical_Records')}}</h2>

        </div>
    </div>
    <div class="row mb-3" style=" min-height:70vh">
        @if(count($medicalRecords)>0)
        {
            @foreach ($medicalRecords as $m)
            <div class="col-md-6 offset-md-3 text-white mb-3" >
                <div class="card p-3 shadow " style="background-color: #bb95dc; color:white !important">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="mb-2">{{__('Doctor_name')}} : <span class="p-1 text-dark rounded" style="background-color: aliceblue">Dr. {{$m->doctor->name}}</span> </p> 
                            <p class="mb-2"> {{__('Date')}} : <span class="p-1 text-dark rounded" style="background-color: aliceblue">{{$m->created_at}}</span></p>
                        </div>
                        <div>
                            <a href={{route('patient.medicalRecord.detail',$m->id)}} class="btn" style="border:2px solid white; color:white"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
           
        @endforeach
        }
        @else{
            <div class="text-center">
                <h3>There is no medical Record</h3>
            </div>
        }
        @endif
        
    </div>
</div>