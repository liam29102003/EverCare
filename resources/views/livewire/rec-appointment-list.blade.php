<div>
<div class="table-responsive text-nowrap mt-0 ">
    <div class='d-flex justify-content-between mt-3'>
    <select name="" class="form-select " style="width:250px;" wire:model.live='type'>
        <option value="">Choose Appointment type</option>
        <option value="online">Online</option>
        <option value="in person">Inperson</option>
    </select>
    @if(count($appointments) !== 0 && $type=='online')
    <a href="{{route('receptionist.mail')}}" class='btn btn-sm btn-success'>Send Confirmation Email to All Patients&nbsp;<i class="fa-regular fa-paper-plane"></i></a>
    @endif
</div>
        <table class="table mt-3" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" >No </th>                    
                    <th style="color:#bb95dc" >Name </th>                    
                    <th style="color:#bb95dc" >Phone</th>
                    <th style="color:#bb95dc" >Appointment Day</th>
                    <th style="color:#bb95dc">Actions</th>
                </tr>
            </thead>

            @if(count($appointments) == 0)
            <tbody>            <td colspan="4" class="text-center " style="color: white !important"><h3>There is no appointment</h3></td>
            </tbody>
            @else
            <tbody class="table-border-bottom-0">
                <?php $i = 1;?>
                @foreach ($appointments as $appointment)
                <tr wire:key="{{ $appointment->id }}" style="border-top:2px solid #FFFEF2; background-color:#bb95dc" class="shadow-sm mb-3 text-white">
                    <td><strong><?= $i++ ?></strong></td>

                    <td><strong>{{ $appointment->name }}</strong></td>
                    <td><strong>{{ $appointment->doctor_name }}</strong></td>
                        <td><div>{{ $appointment->appointment_date }}</div><div>{{ $appointment->appointment_day }}</div></td>
                        {{-- <td><span class="badge bg-label-primary me-1">{{ $appointment->appointment_date }}</span></td> --}}
                        <td>
                           @if($appointment->treatment_type=='online')
                           <a href="#" class="btn btn-sm btn-success">Send&nbsp;<i class="fa-regular fa-paper-plane"></i></a>
                           @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
            @endif
        </table>
    </div>
</div>
