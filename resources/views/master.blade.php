<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('user/assets/login-signup.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    {{-- <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link href='{{ asset('master/style.css') }}' rel='stylesheet' type='text/css' />
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}" data-navigate-track></script>
    <script src="{{ asset('admin/assets/js/config.js') }}" data-navigate-track></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href="{{ asset('master/doctor.css') }}" />
    <style>
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }

        .profile-button {
            background-color: #f8f9fa;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .profile-button:hover {
            background-color: #e9ecef;
        }

        .profile-image {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-name {
            font-weight: bold;
        }

        .dropdown-content {
            width: 100%;
            padding: 5px 20px;
            display: none;
            position: absolute;
            background-color: #ffffff;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            display: block;
            width: 100%;
            text-decoration: none;
            color: #343a40;
        }

        .dropdown-content a:hover {
            background-color: #f8f9fa;
        }

.profile-dropdown:hover .dropdown-content {
    display: block;
}



nav{
    padding: 10px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #bb95dccc;
    position: sticky;
    top:0;
    height: 70px;
    z-index:20;
}

.logo{
    color: #fff;
}

nav ul{
    display: flex;
    gap: 30px;
    align-items: center;
}

nav ul li{
    list-style-type: none;
}

nav ul li a{
    text-decoration: none;
    color: #fff;
}

.menu-icon{
    display: none;
}

.menu-icon i{
    color: #fff;
    font-size: 30px;
}

@media (max-width:987px) {
    nav ul{
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        flex-direction: column;
        text-align: center;
        background: #bb95dc;
        gap: 0;
        overflow: hidden;
    }
    nav ul li{
        padding: 20px;
        padding-top: 0;
    }
    .menu-icon{
        display: block;
    }
    #menuList{
        transition: all 0.5s;
    }
}
    </style>
</head>

<body>

<!-- Nav section -->
<!--  -->
@if(request()->segment(2) !== 'payment')
<nav>
        <div class="logo d-flex align-items-center">
        <i class="fa-solid fa-staff-snake me-2 fs-1 " ></i><div class=' fw-bold'>EVER CARE</div>
        </div>
        <ul id="menuList" class='pt-3'>
            <li><a href="{{route('appointment.form')}}" wire:navigate class=" navBtn btn">{{__('form.Make_Appointment')}}</a></li>
            <li><a href="{{route('home')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">{{__('form.Home')}}</a></li>
            <li><a href="{{route('doctor#list')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">{{__('form.Doctors')}}</a></li>
            <li><a href="{{route('contactPage')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">{{__('form.Contact')}}</a></li>
            <li><a href="{{route('patient.review')}}" wire:navigate class="navItem px-3 rounded me-3 py-2 ">{{__('form.Review')}}</a></li>
            <li>        <livewire:toggle-language>
            </li>
        <li>
        <div class="profile-dropdown" style=''>
        <button class="profile-button btn " >
            @if(session('gender')=='male')
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Profile Image" class="profile-image">
            @elseif(session('gender')=='female')
            <img src="https://static.vecteezy.com/system/resources/thumbnails/004/899/680/small_2x/beautiful-blonde-woman-with-makeup-avatar-for-a-beauty-salon-illustration-in-the-cartoon-style-vector.jpg" alt="Profile Image" class="profile-image">
            @else
            <i class="fa-solid fa-user me-2"></i>
            @endif
        
        
         <span class="profile-name">
            @if(session()->get("name"))
                {{session()->get("name")}}
            @else
            
              Guest  
            @endif
        </span>
        <i class="fas fa-chevron-down ms-2"></i>
    </button>
    <div class="dropdown-content">
        @if(session()->get('name'))
        <a href="{{route('patient.appointment')}}" wire:navigate>{{__('form.Profile')}}</a>
        <hr class="mt-1 mb-1">
        <a href="{{route('patient.myAppointmentPage')}}" wire:navigate>{{__('form.My_Appointments')}}</a> 
        <hr class="mt-1 mb-1">
        <a href="{{route('patient.medicalRecord')}}" wire:navigate>{{__('form.My_medical_records')}}</a> 
<hr class="mt-1 mb-1">
        <a href="{{route('patient.logout')}}" wire:navigate>{{__('form.Logout')}}</a>
        @else
        <a href="{{route('login_page')}}" wire:navigate >{{__('form.Login')}}</a>
        @endif
    </div>
</div>
        
</div>
        </li>
        </ul>


        
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>
    @endif
<!-- end of nav section -->
@yield('content')

        <!-- Footer  -->
        @if(request()->segment(2) !== 'payment')

        <div class="footerContainer d-flex w-100 justify-content-between p-5">
            <div class="footerSection ">
                <h4 class="footerTitle">{{__('form.Quick_Guide')}}</h4>
                <div class="ps-3">
                    <div class='contactInfo'><a>{{__('form.Blog')}}</a></div>
                    <div class='contactInfo'><a>{{__('form.Doctors')}}</a></div>
                    <div class='contactInfo'><a>{{__('form.Home')}}</a></div>
                </div>
            </div>
            <div class="footerSection">
                <h4 class="footerTitle">{{__('form.Contact_Information')}}</h4>
                <div class="footerInfo"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Tel: (+951) 7538055, (+959)
                    778778885</div>
                <div class="footerInfo"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;evercare@gmail.com</div>
                <div class="footerInfo"> <i class="fa-solid fa-city"></i>&nbsp;&nbsp;No. 14, Baho Road, Sanchanung
                    Tsp, Yangon, Myanmar.</div>
            </div>

            <div class="footerSection">

                <h4 class="footerTitle">{{__('form.Work_with_Us')}}</h4>
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
        <div class="defaultColor text-center p-2  shadow shadow-lg border d-flex justify-content-center align-items-center"
            style='background-color:#bb95dc !important'>
            <span class="me-2 d-flex justify-content-center align-items-center"><i
                    class="fa-solid fa-staff-snake me-2 fs-1"></i>
                <div>EVER CARE</div>
            </span>
            <small class="" style='color:white;'>© 2019-2023 Evercare. All rights reserved.</small>
        </div>
        @endif
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
    <script src="{{asset('master/doctor.js')}}"></script>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu(){
            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "350px";
            }
            else{
                menuList.style.maxHeight = "0px";
            }
        }
        
    </script>
</body>

</html>
