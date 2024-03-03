<div>
    <div class='d-md-flex justify-content-between mt-3'>
        <select name="" class="form-select border-0 mt-md-2" style="width:250px;" wire:model.live='type'>
            <option value="">Choose Appointment type</option>
            <option value="online">Online</option>
            <option value="in person">Inperson</option>
        </select>
        @if (count($appointments) !== 0 && $type == 'online')
            <a href="{{ route('receptionist.mail') }}" class='btn mt-md-2 '  style="background-color: #bb95dc; color: white; ">Send Confirmation Email to All
                Patients&nbsp;<i class="fa-regular fa-paper-plane mb-0 "></i></a>
        @endif
        <a href='{{ route("rec.approve.online") }}' class="btn mt-md-2  me-5 shadow-sm position-relative" wire:navigate
            style="background-color: #bb95dc; color: white;">
            Approve Online Approvements
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $sc }}
            </span>
        </a>
    </div>
    <div class="table-responsive text-nowrap mt-0 ">
        
        <table class="table mt-3">
            <thead>
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc">No </th>
                    <th style="color:#bb95dc">Name </th>
                    <th style="color:#bb95dc">Phone</th>
                    <th style="color:#bb95dc">Appointment Day</th>
                </tr>
            </thead>

            @if (count($appointments) == 0)
                
                    <tbody>
                        <td colspan="4" class="text-center " style="color: white !important">
                        @if ($type == 'online')
                            <h3>There is no new appointment to send email</h3>
                        @elseif($type=='')
                        <h3>Choose Appointment type first.</h3>
                        @else
                        <h3>There is no in-person appointment</h3>
                        @endif
                        </td>
                    </tbody>  
            @else
                <tbody class="table-border-bottom-0">
                    <?php $i = 1; ?>
                    @foreach ($appointments as $appointment)
                        <tr wire:key="{{ $appointment->id }}"
                            style="border-top:2px solid #FFFEF2; background-color:#bb95dc"
                            class="shadow-sm mb-3 text-white">
                            <td><strong><?= $i++ ?></strong></td>

                            <td><strong>{{ $appointment->patient->name }}</strong></td>
                            <td><strong>{{ $appointment->patient->phone }}</strong></td>
                            <td>
                                <div>{{ $appointment->appointment_date }}</div>
                                <div>{{ $appointment->appointment_day }}</div>
                            </td>
                            {{-- <td><span class="badge bg-label-primary me-1">{{ $appointment->appointment_date }}</span></td> --}}
                            
                        </tr>
                    @endforeach

                </tbody>
            @endif
        </table>
    </div>
</div>
