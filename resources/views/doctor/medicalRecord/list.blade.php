<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
@extends('admin.layouts.app')
@section('content')
{{-- {{count($medicals)}} --}}
{{-- {{$id}} --}}
<livewire:doctor-medical-record-list :patientid=$id>
   

@endsection

