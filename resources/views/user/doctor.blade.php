@extends('user.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('user/assets/doctor.css') }}">
<link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">
<link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}">
<link rel="stylesheet" href="{{asset('user/assets/login-signup.css')}}">    
@endsection
@section('content')
<livewire:doctor-list>
  
@endsection