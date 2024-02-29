@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="d-flex mt-2 mb-0">
                <input type="date" name="" id="" wire:model.live='date' class="form-control w-25 border-0 ">
                @if($typet === "inperson")
                <button class="btn ms-1" wire:click='changeType("online")' style="background-color: white; color:#bb95dc; border:2px solid #bb95dc">Online</button>
                <button class="btn ms-1" wire:click='changeType("inperson")' style="background-color: #bb95dc; color:white; border:2px solid #ffffff">In person</button>
                @elseif($typet === "online")
                <button class="btn ms-1" wire:click='changeType("online")' style="background-color: #bb95dc; color:white; border:2px solid #ffffff">Online</button>
                <button class="btn ms-1" wire:click='changeType("inperson")' style="background-color: white; color:#bb95dc; border:2px solid #bb95dc; ">In person</button>
                @endif
            </div>
           

            <div class="card mt-2"  style="background-color:#bb95dccc !important; color:#ffffff !important">
                {{-- <h1 x-text="a"></h1> --}}
                
                {{-- <h1 x-text="a"></h1> --}}
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
        <div class="mb-0">
            <h2 class="card-header" style="color:#ffffff">appointment Record list</h2>
        </div>
        <div class="mb-0">
            <div class="mt-3 me-2 d-flex align-items-center ">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" class="form-control border-0 shadow ms-2 " wire:model.live="search" placeholder="Search.....">
              {{-- <a href="{{route('appointment.add')}}" wire:navigate class="btn btn-primary ms-2"  style="background:#ffffff; color:#bb95dc; border-color:#bb95dc !important "><i class="fa-solid fa-plus"></i></a> --}}

            </div>
              
            
        </div>
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" class="btn" wire:click='sorting("name")'>Name @if ($orderName === 'name')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>                    
                    <th style="color:#bb95dc" wire:click='sorting("treatment_type")'>Type @if ($orderName === 'treatment_type')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#bb95dc" wire:click='sorting("patient_type")'>Status @if ($orderName === 'patient_type')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#bb95dc" wire:click='sorting("appointment_date")'>Date @if ($orderName === 'appointment_date')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#bb95dc" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if(count( $appointments ) == 0)
                <tr><td colspan="5" class="text-center text-white">There is no appointment</td></tr>
                @else
                @foreach ($appointments as $appointment)
                <tr wire:key="{{ $appointment->id }}" style="border-top:2px solid #FFFEF2; " class="shadow-sm mb-3 text-white">
                    <td><strong>{{ $appointment->patient->name }}</strong></td>
                    <td>{{ $appointment->treatment_type }}</td>

                        <td>{{ $appointment->patient_type }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $appointment->appointment_date }}</span></td>
                        <td class="text-center">
                            <a href="{{route('doctor.appointment.detail',['type'=>$appointment->treatment_type,'id'=>$appointment->id])}}" wire:navigate class=" misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-eye"></i></a>
                            {{-- <button type="button" class="btn misc" style="color:#e2dcf8"
                                x-on:click=" $dispatch('open-modal'); $wire.changevalue({{ $appointment->id }}, 'Are you sure to delete')">

                                <i class="fa-solid fa-trash"></i></button>
                            <a href="{{ route('appointment.edit', $appointment->id) }}" wire:navigate class="misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-pen-to-square"></i></a> --}}
                        </td>
                    </tr>
                @endforeach
                @endif

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{ $appointments->links() }}

        </div>



        {{-- <div>{{$text2}}</div> --}}
        @if ($text2 != '')
            @include('admin.modal')
        @endif
    </div>
</div>

        </div>
    </div>
</div>
