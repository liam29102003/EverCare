
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
  @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('master/login-signup.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    {{-- <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link href='{{asset("master/style.css")}}' rel='stylesheet' type='text/css'/>
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}" data-navigate-track></script>
    <script src="{{ asset('admin/assets/js/config.js') }}" data-navigate-track></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href="{{ asset('master/doctor.css')}}"/>
</head>
<body>

<!-- Nav section -->
<!--  -->
<div class="navContainer">
    <div class="respMenu p-3 bg-dark" style="border-bottom: 1px solid;">
        <div class="navItem mt-3"><a href="{{route('home')}}" wire:navigate class="text-decoration-none " style="color: inherit;">Home</a></div>
        <div class="navItem mt-3"><a href="{{route('doctor#list')}}" wire:navigate class="text-decoration-none " style="color: inherit;">Doctors</a></div>
        <div class="navItem mt-3"><a href="" class="text-decoration-none " style="color: inherit;">Contact</a></div>
        <div class="navItem mt-3"><a href="" class="text-decoration-none " style="color: inherit;">FAQ</a></div>
        <div class="mt-3">
            <a href="{{route('new#appointment')}}" wire:navigate class=" navBtn btn">Make Appointment</a>
            <a href="{{route('login_page')}}" wire:navigate class="navBtn btn">Login</a>
            </div>
    </div>
    <div class="navbar mt-3 shadow-sm mb-5 mb-lg-0 p-3 mx-3 rounded justify-content-between">
        <div class="logo d-flex align-items-center" ><i class="fa-solid fa-staff-snake me-2 fs-1"></i><div>EVER CARE</div></div>
        <div class="origin1">
            <a href="{{route('home')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">Home</a>
            <a href="{{route('doctor#list')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">Doctors</a>
            <a href="#" class="navItem px-3 rounded me-3 py-2 ">Contact</a>
            <a href="#" class="navItem px-3 rounded me-3 py-2 ">FAQ</a>
            
        </div>
        <div class="origin">
            <a href="{{route('new#appointment')}}" wire:navigate class=" navBtn btn ">Make Appointment</a>
            <a href="{{route('login_page')}}" wire:navigate class=" navBtn btn ">Login</a>
        </div>
        <div class="new p-1 rounded"><i class="fa-solid fa-bars"></i></div>
    </div>
<!-- end of nav section -->
@yield('content')

<!-- Footer  -->
<div class="footerContainer d-flex w-100 justify-content-between p-5" style='background-color:#000000dd'>
    <div class="footerSection ">
        <h4 class="footerTitle">Quick Guide</h4> 
        <div class="ps-3">
          <div class='contactInfo'><a>Blog</a></div>
       <div class='contactInfo'><a>Doctors</a></div>
       <div class='contactInfo'><a>FAQ</a></div>
       <div class='contactInfo'><a>Home</a></div>
        </div>
    </div>
    <div class="footerSection">
        <h4 class="footerTitle">Contact Information</h4>
        <div class="footerInfo"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Tel: (+951) 7538055, (+959) 778778885</div>
        <div class="footerInfo"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;evercare@gmail.com</div>
        <div class="footerInfo"> <i class="fa-solid fa-city"></i>&nbsp;&nbsp;No. 14, Baho Road, Sanchanung Tsp, Yangon, Myanmar.</div>
    </div>
    
    <div class="footerSection">
       
        <h4 class="footerTitle">Work with Us</h4>
        <div class="footerInfo">johndoe@gmail.com</div>
        <div class="footerInfo">09 7654 154 60 , 09 4247 952 82</div>
        <hr>
        <div class="">
          <i class="fa-brands fa-youtube icon text-danger"></i>
          <i class="fa-brands fa-facebook icon text-primary"></i>
          <i class="fa-brands fa-viber icon" style="color: #59267c;"></i>
        </div>
    </div>
</div>
<div class="defaultColor text-center p-2  shadow shadow-lg border d-flex justify-content-center align-items-center">
    <span class="logo me-2 d-flex justify-content-center align-items-center"><i class="fa-solid fa-staff-snake me-2 fs-1"></i><div>EVER CARE</div></span>
    <small class="">© 2019-2023 Evercare. All rights reserved.</small>
</div>
<!-- end of footer -->
@livewireScripts()
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" data-navigate-track integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}" data-navigate-track></script>
    <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}" data-navigate-track></script>
    {{-- <script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}" data-navigate-track></script> --}}
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}" data-navigate-track>
    </script>

    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}" data-navigate-track></script>
    
    <script src="{{ asset('admin/assets/js/main.js') }}" data-navigate-track></script>



    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src='{{asset("user/assets/appointment.js")}}'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src='{{asset("master/navbar.js")}}'></script>
    <script src="{{asset('master/doctor.js')}}"></script>
</body>
</html>
