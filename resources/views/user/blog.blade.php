@extends('user.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">

<link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}">
<link rel="stylesheet" href="{{asset('user/assets/blog.css')}}">

@endsection
@section('content')
<div class="container p-3">
    <a href="" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i>&nbsp;Back</a>
</div>
<div class="container">
    <h3 class="text-center mb-3"><strong>ဆောင်းပါးအမျိုးအစားရွေးချယ်ပါ</strong></h3 class="text-center mb-3">
</div>
<div class="container  d-flex flex-wrap justify-content-center">
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType  m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1 defaultColor text-white">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
    <a href="" class="categoryType m-1">အသက်ရှုလမ်းကြောင်းဆိုင်ရာ</a>
</div><hr>


    {{-- <livewire:blog-list> --}}
@endsection