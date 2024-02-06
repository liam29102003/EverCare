{{-- <div>
    @if(session()->has('my_associative_array'))
        @foreach (session('my_associative_array') as $key => $value)
            {{ $key }}: {{$value['name']}}
        @endforeach
    @endif
</div> --}}
@extends('admin.layouts.app')
@section('content')
@if(empty(session('my_associative_array')))
<h3 class="text-center">There is no item in cart</h3>
@else
    <livewire:cart />
    @endif
@endsection
