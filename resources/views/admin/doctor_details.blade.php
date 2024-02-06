@extends('admin.layouts.app')
@section('content')
<livewire:doctor-details doctor_id="{{$doctor->id}}" />
@endsection
