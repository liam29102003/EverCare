{{-- <div>
    <select name="" id="" wire:model.live='doctor_id'>
        <option value="">All</option>
        @foreach ($doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
    </select>
    @foreach ($appointments as $appointment)
    {{$appointment->name}}
    {{$appointment->doctor->name}}
    {{$appointment->updated_at}}
    {{$appointment->treatment_type}}

    <br>
    @endforeach

</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="d-md-flex justify-content-start mt-2" >
                <div class="">
                    <label for="" class="form-label">Choose Doctor</label>
                    <select name="" id="" wire:model.live='doctor_id' class="form-select me-md-2 border-0 shadow">
                        <option value="">All</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach
                    </select>
                </div>
               @if($doctor_id !== "")
                <div class="">
                    <label for="" class="form-label">Choose Time</label>
                    <select name="" id="" wire:model.live='time' class="form-select ms-md-2 me-md-2 border-0 shadow">
                        <option value="">All</option>
                        @foreach ($schedules as $schedule)
                            <option value="{{ $schedule->from .' to '. $schedule->to . ' | '.ucfirst($schedule->day)}}">{{$schedule->day ."|". $schedule->from .'-'. $schedule->to }}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" ps-md-2">
                    <label for="" class="form-label">Choose Type</label>
                    <select name="" id="" wire:model.live='type' class="form-select ms-md-2 border-0 shadow">
                        <option value="">Type</option>
                        <option value="online">Online</option>
                        <option value="in person">Inperson</option>

                    </select>
                </div>
                @endif
            </div>
            <div class="card mt-4 "  style="background-color:#bb95dccc !important; color:#ffffff !important">
                {{-- <h1 x-text="a"></h1> --}}
                
                {{-- <h1 x-text="a"></h1> --}}
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
        <div class="mb-0 text-center  mt-0">
            <h2 class="card-header " style="color:#ffffff">Appointments</h2>
        </div>
       
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" >No </th>                    
                    <th style="color:#bb95dc" >Name </th>                    
                    <th style="color:#bb95dc" >Phone </th>
                    {{-- <th style="color:#bb95dc" >Qualification</th> --}}
                    <th style="color:#bb95dc">Actions</th>
                </tr>
            </thead>
            @if($doctor_id !== "" && $time !== "" && $type !== "")
            @if(count($appointments) == 0)
            <tbody>            <td colspan="4" class="text-center " style="color: white !important"><h3>There is no appointment</h3></td>
            </tbody>
            @else
            <tbody class="table-border-bottom-0">
                <?php $i = 1;?>
                @foreach ($appointments as $appointment)
                <tr wire:key="{{ $appointment->id }}" style="border-top:2px solid #FFFEF2; " class="shadow-sm mb-3 text-white">
                    <td><strong><?= $i++ ?></strong></td>

                    <td><strong>helo{{ $appointment->name }}</strong></td>
                        <td>{{ $appointment->phone }}</td>
                        {{-- <td><span class="badge bg-label-primary me-1">{{ $appointment->appointment_date }}</span></td> --}}
                        <td>
                           <a href="#" class="btn btn-sm btn-outline-danger">Cancel</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            @endif
            @else
            <tbody>            <td colspan="4" class="text-center " style="color: white !important"><h3>Choose Doctor and Time First</h3></td>
            </tbody>
            @endif
        </table>
        {{-- <div class="text-white ms-3 mt-3" >
        {{ $appointments->links() }}

        </div> --}}



        {{-- <div>{{$text2}}</div> --}}
        {{-- @if ($text2 != '')
            @include('admin.modal')
        @endif --}}
    </div>
</div>

        </div>
    </div>
</div>

