<form action="" wire:submit='save' method='post'>

    <div class="col-12 col-md-8 offset-md-2 p-5 border-0 form-container d-flex flex-column justify-content-center align-items-center" style="background-color:#bb95dc22; color:#9d926a !important">
        <h2 class="txt-shadow">{{__('form.here')}}</h2>
        @if(session('status'))
        <livewire:failure-alert :status='$status'>
        @endif
        <p class="text-center">{{__('form.app_desc')}}</p>
       
        <div class="bg-dark w-100" style="height:2px"></div>

        <div class="w-100 wrap mt-3">
            <label for="">{{__('form.select_app')}}<span class='text-danger'>({{__('form.one')}}*)</span></label>
            <div class="d-flex wrap">
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input bg-secondary" type="radio" name="treatment_type" value='in person' wire:model='treatment_type'>
                        <label class="form-check-label" >
                        {{__('form.in_person')}}
                        </label>
                      </div>
                <!-- <small for="" class="text-secondary">First Name</small> -->
                </div>
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input bg-secondary " type="radio" name="treatment_type" value='online' wire:model='treatment_type'>
                        <label class="form-check-label" >
                        {{__('form.Online_treatment')}}
                        </label>
                      </div>
                </div>
            </div>
            @error('treatment_type')
                    <span class='text-danger'>{{$message}}</span>
            @enderror
        </div>
        
        <div class="w-100 wrap mt-3">
            <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                <div class="left displayNone">
                <label for="">{{__('form.Name')}}<span class='text-danger'>*</span></label>
                <input type="text" class="form-control shadow-sm" name='name'  placeholder="" style='border:0' wire:model='name' disabled>
                @error('name')
                    <span class='text-danger'>{{$message}}</span>
                @enderror
            </div>
                <div class="right email">
                    <label for="">{{__('form.Email')}}<span class='text-danger'>*</span></label>
                    <input type="email" class="form-control shadow-sm " name='email' placeholder="{{session('email')}}"  style='border:0' wire:model='email' disabled>
                    @error('email')
                    <span class='text-danger'>{{message('email')}}</span>
                @enderror
                </div>
                
            </div>
        </div>

        <div class="w-100 wrap mt-3">
            <div class=" d-flex col-12 justify-content-between" style="flex-wrap: wrap;">
                <div class="left">
                    <label for="">{{__('form.chdoctor')}}<span class='text-danger'>*</span></label>
                    <select class="form-control shadow-sm form-select" name='doctor' wire:change="changeDoctor($event.target.value)" aria-label="Default select example"  style='border:0' wire:model='doctor'>
                        <option selected value="">Doctor (Speciality)</option>
                        @foreach($doctors as $doctor)
                        <option value='{{$doctor->id}}' wire:click="logd">{{$doctor->name}} ({{$doctor->specialization->name}})</option>

                        @endforeach
                    </select>
                    @error('doctor')
                    <span class='text-danger'>{{$message}}</span>
                @enderror
                </div>
                <div class="right">
                    <label for="">{{__('form.appDate')}}<span class='text-danger'>*</span></label>
                    <select class="form-control shadow-sm form-select " name='appointment_day' aria-label="Default select example" style='border:0' wire:model="appointment_day">
                    
                    <option selected value=''>Choose Appointment Date</option>
                    @foreach($appointments as $a)
                        <option value="{{$a['from']}} to {{$a['to']}} | {{$a['day']}}" wire:click="logd">{{$a['from']}} to {{$a['to']}} | {{strtoupper($a['day'])}}</option>

                        @endforeach
                    </select>

                    @error('appointment_day')
                    <span class='text-danger'>{{$message}}</span>
                @enderror
                </div>
            </div>
        </div>
        <div class="w-100 mt-3 ">
            <label for="">{{__('form.Description')}}</label>
            <textarea name="description" id="" class="w-100 form-control shadow-sm" rows="3" placeholder="symptoms" style='border:0' wire:model='description'></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3 border-0 d-flex align-items-center"
        style="background:#bb95dcff; color:#fffdd2; border-color:#9d926a !important ">
            <div>{{__('form.Make_Appointment')}}</div>

            <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                <span class="visually-hidden">{{__('form.loading')}}...</span>
            </div>
        </button>
        
    </div>
</form>