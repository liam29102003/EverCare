<div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                            <label for="">Choose Doctor<span class='text-danger'>*</span></label>
                            <select class="form-control shadow-sm form-select" name='doctor' wire:change="changeDoctor($event.target.value)" aria-label="Default select example"  style='border:0'>
                                <option selected value="">Doctor (Speciality)</option>
                                @foreach($doctors as $doctor)
                                <option value='{{$doctor->id}}' wire:click="logd">{{$doctor->name}} ({{$doctor->speciality}})</option>

                                @endforeach
                            </select>
                            @error('doctor')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Choose Appointment Date<span class='text-danger'>*</span></label>
                            <select class="form-control shadow-sm form-select " name='appointment_date' aria-label="Default select example" style='border:0'>
                            
                            <option selected value=''>Choose Appointment Date</option>
                            @foreach($appointments as $a)
                                <option value="{{$a['from']}} to {{$a['to']}} | {{strtoupper($a['day'])}}" wire:click="logd">{{$a['from']}} to {{$a['to']}} | {{strtoupper($a['day'])}}</option>

                                @endforeach
                            </select>

                            @error('appointment_date')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>