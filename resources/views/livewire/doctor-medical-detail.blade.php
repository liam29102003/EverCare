<div>
    {{-- <h1>{{$type}}</h1>
<h2>{{$id}}</h2></div> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="card-body m-3" style="border: 2px dashed #bb95dc">
                        <table class="table "  >
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>{{ $appointment->patient->name }}</td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>
                                <td>:</td>
                                <td>{{ $appointment->patient->dob }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>:</td>
                                <td>{{ $appointment->patient->gender }}</td>
                            </tr>
                            <tr>
                                <th>Patient Type</th>
                                <td>:</td>
                                <td>{{ $appointment->patient_type }}</td>
                            </tr>
                            <tr>
                                <th>Appointment date</th>
                                <td>:</td>
                                <td>{{ $appointment->appointment_date }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>:</td>
                                <td>{{ $appointment->description }}</td>
                            </tr>
                            @if ($appointment->treatment_type === 'online' )
                                
                                @if($show)
                                <tr>
                                    <th>Symptoms</th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control " style="border-color:#bb95dc !important " wire:model = "symptom"></td>
                                </tr>
                                @else
                                
                                <tr>
                                    <th>Symptoms</th>
                                    <td>:</td>
                                    <td>{{ $appointment->symptoms }}</td>
                                </tr>
                                @endif
                            @endif
                            @if ($appointment->patient_type === 'old')
                                <tr class="text-center">
                                    <td colspan="3"><a
                                            href="{{ route('list.medicalrecord', $appointment->patient->id) }}"
                                            wire:navigate class="btn"
                                            style="background-color: #bb95dc; color:white; border:2px solid #bb95dc; ">View
                                            past medical records</a>
                                    </td>
                                </tr>
                            @endif
                            <tr class="text-center">
                                {{-- <livewire:appointment-buttom :appointment=$appointment /> --}}
                                <td colspan="3"><button wire:click='name'  class="btn"  style="background-color: #bb95dc; color:white; border:2px solid #bb95dc; ">{{$text}}</button>
                                </td>
                            </tr>
                            @if($show)
                            <tr>
                                <th>
                                    Disease
                                </th>
                                <td>:</td>
                                <td><input type="text" name="" class="form-control " style="border-color:#bb95dc !important " id="" wire:model.live='disease'></td>
                            </tr>
                            <tr>
                                <th>
                                    Diet
                                </th>
                                <td>:</td>
                                <td><input type="text" name="" class="form-control " style="border-color:#bb95dc !important " id="" wire:model.live='diet'></td>
                            </tr>
                            <tr>
                                <th>
                                    Note
                                </th>
                                <td>:</td>
                                <td><input type="text" name="" class="form-control " style="border-color:#bb95dc !important " id="" wire:model.live='note'></td>
                            </tr>
                            <tr>
                                <th>
                                    Follow up doctor
                                </th>
                                <td>:</td>
                                <td>
                                    <select name="" id="" class="form-select" wire:model.live='specialization' style="border-color:#bb95dc !important">
                                        <option value="">Choose speciality</option>
                                        @foreach ($specializations as $specialization)
                                        <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                        @endforeach
                                    </select>
                                    @if(count($doctor_name) !== 0)
                                    <select name="" id="" class="mt-2 form-select" wire:model.live='follow_up' style="border-color:#bb95dc !important">
                                        <option value="">Choose docotor</option>
                                        @foreach ($doctor_name as $name)
                                        <option value="{{ $name['id'] }}">{{ $name['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan=""><button type="reset"
                                        class="btn"
                                         style="background-color: #bb95dc; color:white; border:2px solid #bb95dc; ">Clear</button>
                                </td>
                                <td></td>
                                <td><button
                                    class="btn" wire:click='save()'
                                     style="background-color: #bb95dc; color:white; border:2px solid #bb95dc; ">Add</button>
                            </td>
                            </tr>
                            @endif
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card" style="background-color:#bb95dc; color:#ffffff !important">
                    <div class="card-body">
                        <form action="" class="form">
                            <div class="row mb-3">
                                <div class="col-md-10 offset-md-1">


                                    <label class=" col-form-label text-white" for="basic-default-name"><i
                                            class="fa-solid fa-signature me-2"></i>Name :</label>

                                    <div class="">
                                        <input type="text" class="form-control shadow-sm" id="basic-default-name"
                                            name='note' value="{{ session()->get('name') }}" placeholder="John Doe"
                                            style='border:0' />
                                        <small class="text-danger">
                                            @error('note')
                                                {{ $message }}
                                            @enderror
                                        </small>

                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10 offset-md-1">


                                    <label class=" col-form-label text-white" for="basic-default-name"><i
                                            class="fa-solid fa-signature me-2"></i>Note :</label>

                                    <div class="">
                                        <input type="text" class="form-control shadow-sm" id="basic-default-name"
                                            name='note' wire:model='note' placeholder="John Doe" style='border:0' />
                                        <small class="text-danger">
                                            @error('note')
                                                {{ $message }}
                                            @enderror
                                        </small>

                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10 offset-md-1">


                                    <label class=" col-form-label text-white" for="basic-default-name"><i
                                            class="fa-solid fa-signature me-2"></i>Diet :</label>

                                    <div class="">
                                        <input type="text" class="form-control shadow-sm" id="basic-default-name"
                                            name='diet' wire:model='diet' placeholder="John Doe" style='border:0' />
                                        <small class="text-danger">
                                            @error('diet')
                                                {{ $message }}
                                            @enderror
                                        </small>

                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-10 offset-md-1">


                                    <label class=" col-form-label text-white" for="basic-default-name"><i
                                            class="fa-solid fa-signature me-2"></i>note :</label>

                                    <div class="">
                                        <input type="text" class="form-control shadow-sm" id="basic-default-name"
                                            name='note' wire:model='note' placeholder="John Doe" style='border:0' />
                                        <small class="text-danger">
                                            @error('note')
                                                {{ $message }}
                                            @enderror
                                        </small>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>