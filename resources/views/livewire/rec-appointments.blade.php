<div>
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
</div>
