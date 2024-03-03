<div class="doctor-profile py-4" x-data="{ open: false }">
    <div class="container">
        <div class="row">
            <div class="row mb-3">
                @if (session('status'))
                    <livewire:alert>
                @endif

            </div>
            <div class="col-lg-4">
                <div class="card mb-3 shadow-sm" style="background-color: #bb95dc !important; color:#ffffff !important">
                    <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="{{ asset('storage/' . $doctor->image) }}" alt="doctor dp">
                        <h3 class="mt-3 mb-0 text-white">Dr.{{ $doctor->name }}</h3>

                        <h5 class="mb-0 mt-2 text-white">Cardiologist</h5>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" wire:navigate type="submit"
                            class="btn mt-2 btn-primary  text-center mx-auto "
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div>Edit</div>

                        </a>
                        <br>
                        <button x-on:click="open = ! open" type="submit"
                            class="btn mt-2 btn-primary w-75 text-center mx-auto "
                            style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                            <div> <span x-show="!open">Manage</span> <span x-show="open">Close</span> Schedule</div>
                        </button>
                    </div>

                </div>

                <div x-show="open">
                    <form wire:submit.prevent="@if($text === 'Add') store @else updateSchedule({{$id}}) @endif">
                        @csrf
                        <table class="table">
                            <tr>
                                <td><label for="" class="">Day</label></td>
                                <td>:</td>
                                <td>
                                    <select name="" wire:model='day' id=""
                                        class="form-select form-select-md mb-2 ">
                                        <option value="">Choose Date</option>
                                        <option value="mon">Monday</option>
                                        <option value="tue">Tuesday</option>
                                        <option value="wed">Wednesday</option>
                                        <option value="thu">Thursday</option>
                                        <option value="fri">Friday</option>
                                        <option value="sat">Saturday</option>
                                        <option value="sun">Sunday</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="" class="">From</label></td>
                                <td>:</td>
                                <td>
                                    <input type="time" wire:model='from' name="" id=""
                                        class="form-control form-control-md mb-2">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="" class="">To</label></td>
                                <td>:</td>
                                <td>
                                    <input type="time" wire:model='to' name="" id=""
                                        class="form-control form-control-md mb-2">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="" class="">Type</label></td>
                                <td>:</td>
                                <td>
                                    <select name="" id="" class="form-select" wire:model='type'>
                                        <option value="online" >Online</option>
                                        <option value="in person" >Inperson</option>

                                    </select>
                                
                                </td>
                            </tr>
                            <tr>
                                <td  class="text-center border-0 d-flex">
                                    <button type="submit" class="btn btn-primary me-2  d-flex align-items-center"
                                        style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                                        <div>{{$text}}</div>

                                        <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </button>
                                   
                                </td>
                                <td></td>
                                @if($text === 'edit')
                                <td>
                                <button type="button" wire:click='change' class="btn btn-primary  d-flex align-items-center"
                                style="background:#bb95dc; color:white; border:3px solid #ffffff !important ">
                                <div>Cancel</div>
                                
                            </button>
                        </td>
                                @endif
                            </tr>
                        </table>




                    </form>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm text-white" style="background-color: #bb95dc !important; color:#ffffff !important">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table   text-white" style="border: #ffffff"> 
                                <tr>
                                    <th width="30%" class="text-white">Qualification</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->qualification }}</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Specialization</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->specialization->name }}</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Experience</th>
                                    <td width="2%">:</td>
                                    <td>{{$doctor->Exp}} years</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Gender</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->gender }}</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Consulation Fee</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->price }} MMK</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Schedule</th>
                                    <td width="2%">:</td>
                                    <td >
                                        @foreach ($schedules as $schedule)
                                            <p class="mb-0">{{ $schedule->day }}:{{ $schedule->from }} -
                                                {{ $schedule->to }} - {{$schedule->type}} <i x-show="open" class="fa-sharp mx-2 fa-solid fa-circle-minus text-white shadow" wire:click='delete({{$schedule->id}})'></i><i x-show="open" class="fa-sharp fa-solid fa-pencil text-white" wire:click='edit({{$schedule->id}})'></i></p>
                                        @endforeach
                                    </td>
                                                                    </tr>
    
                                <tr>
                                    <th width="30%" class="text-white">Joined Date</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->created_at }}</td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div style="height: 26px"></div>
                <div class="card shadow-sm" style="background-color: #bb95dc !important; color:#ffffff !important">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0 text-white"><i class="fas fa-map-marked-alt pr-1 me-2"></i>Contact Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table  " style="border: #ffffff">
                                <tr>
                                    <th width="30%" class="text-white">Phone</th>
                                    <td width="2%" class="text-white">:</td>
                                    <td class="text-white">{{ $doctor->phone }}</td>
                                </tr>
                                <tr>
                                    <th width="30%" class="text-white">Email</th>
                                    <td width="2%" class="text-white">:</td>
                                    <td class="text-white">{{ $doctor->email }}</td>
                                </tr>
    
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mt-3 p-3" style="background-color: #bb95dc; color:#ffffff">
                <h4 class=" text-white"><i class="fa-solid fa-circle-info me-2"></i>Biography</h4>
                {{$doctor->bio}}
            </div>
        </div>
    </div>
</div>