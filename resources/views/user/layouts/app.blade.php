<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
  />     
  {{-- <link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">

<link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}"> --}}
{{-- @livewireStyles --}}
   @yield('css')
</head>
<body>
    @include('user.navbar')
    @yield('content')
    @include('user.footer')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
a
    <script src="{{asset('user/assets/navbar.js')}}"></script>
    <script src="{{asset('user/assets/script.js')}}"></script>
</body>
</html>