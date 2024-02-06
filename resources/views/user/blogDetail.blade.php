@extends('user.layouts.app')
@section('css')

<link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">

<link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}">
<link rel="stylesheet" href="{{asset('user/assets/blog.css')}}">
@endsection
@section('content')
<livewire:blog-detail>
    
@endsection