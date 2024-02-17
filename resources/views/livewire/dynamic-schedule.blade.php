<div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                        <div class="left">
                            <label for="">Choose Doctor<span class='text-danger'>*</span></label>
                            <select class="form-control shadow-sm form-select " aria-label="Default select example" name='doctor' style='border:0'>
                                <option selected>Doctor (Speciality)</option>
                                @foreach($doctors as $doctor)
                                <option value='{{$doctor->id}}'>{{$doctor->name}} ({{$doctor->speciality}})</option>

                                @endforeach
                            </select>
                            @error('doctor')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                        <div class="right">
                            <label for="">Choose Appointment Date<span class='text-danger'>*</span></label>
                            <select class="form-control shadow-sm form-select " name='appointment_date' aria-label="Default select example" style='border:0'>
                            <option selected value='3'>Choose Appointment Date</option>
                            <option  value='3'>Monday (4:30)</option>
                                <option value="1">Wednesday (2:30)</option>
                            </select>
                            @error('appointment_date')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                        </div>
                    </div>