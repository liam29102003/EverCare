@extends('master')


@section('content')
<div class="container pt-5">
    @if(session()->get('email') == '')
    <livewire:new-appointment >

    @else
    

    @endif
    </div>



@endsection