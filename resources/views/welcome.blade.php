{{-- 
<a href="{{route('admin.login')}}">Admin Login</a>
<a href="{{route('receptionist.login')}}">Rec Login</a>
<a href="{{route('doctor.login')}}">Doctor Login</a> --}}


@extends('master')
@section('content')

<div class="container-fluid  mt-5 mt-lg-0 pt-5 pt-lg-0 mb-5 mb-lg-0   " style="height: 100vh;" >
  
    <div class="row h-100">
        <div class="leftHero col-12 col-lg-5  d-flex flex-column justify-content-center align-items-center ">
            <h4 class="text-start">{{__('form.Your_faith')}}</h4>
            <h1 class="text-start brand" style="text-shadow: black 1px 0 3px; font-size:60px"><i class="fa-solid fa-staff-snake me-2 "></i>EVER CARE</h1>
            <p class="text-center" style="color: #bb95dc">{{__('form.Build_a_happy_life_with_a_healthy_body')}}</p>
            <a href="{{route('appointment.form')}}" wire:navigate class="btn ownBtn mt-3">{{__('form.Makeanappointment')}}&nbsp;<i class="fa-regular fa-calendar"></i></a>
       </div>
       <div class="rightHero col-12 col-lg-7  text-center " >
    
        <img src="{{asset('master/images/hero.png')}}" alt="" class="w-100  h-100"  >
       </div>
    </div>
  
   
</div>
<div class="container-fluid  d-flex justify-content-between " style="background-color:  #fff;margin-top: 160px;">
<div class="w-25 text-center ms-3 " style='border:3px solid #bb95dc'>
    <img src="{{asset('master/images/patient.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#bb95dc;">{{__('form.Patients')}}</h3>
    <h4 class="" style="color:#bb95dc;">{{count($patients)}}</h4>
</div>
<div class="w-25 text-center" style='border:3px solid #bb95dc'>
    <img src="{{asset('master/images/doctor.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#bb95dc;">{{__('form.Doctors')}}</h3>
    <h4 class="" style="color:#bb95dc;">{{count($doctors)}}</h4>
</div>
<div class="w-25 text-center me-3" style='border:3px solid #bb95dc'>
    <img src="{{asset('master/images/receptionist.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#bb95dc;">{{__('form.Staffs')}}</h3>
    <h4 class="" style="color:#bb95dc;">{{count($staffs)}}</h4>
</div>
</div>
<!-- End of Hero section  -->

<!-- Start of service section -->
<div class="mt-5 mb-5 container">
<h4 class="title">
    {{__('form.Available_health_services')}}
    <div class="titleLine" style='background-color:#bb95dc'></div>
</h4>
  

  <section class="pt-5 pb-1">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3"></h3>
            </div>
            <div class="col-6 text-end">
                <a class="btn mb-3 arr mr-1" style='border:2px solid #bb95dc' href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn mb-3 arr " style='border:2px solid #bb95dc' href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- item -->
                         <div class="carousel-item active w-100">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow carItem">
                                        <img class="" alt="100%x280" src="https://www.pharmacyregulation.org/sites/default/files/styles/regulate_responsive/public/regulate/gphco-7806.jpg?itok=gCv8qecN">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.Pharmacy_Service')}}</h5>
                                            <p class="card-text">8AM to 6PM </p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 ">
                                    <div class="card shadow">
                                        <img class="" alt="100%x280" src="https://www.praktischarzt.de/wp-content/uploads/2023/03/Becoming-a-medical-doctor-or-physician-in-Germany.jpg">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.General_Doctors')}}</h5>
                                            <p class="card-text">9AM to 8PM Services</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="" alt="100%x280" src="https://www.defactodentists.com/wp-content/uploads/2020/08/The-Ripley-Family-Dental-Centre_6629_AT-1024x640.jpg">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.Dental_Clinic')}}</h5>
                                            <p class="card-text">9AM to 8PM Services</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item w-100">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://www.asiaroyalhospital.com/wp-content/uploads/2019/02/ul.jpg">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.4D_ultrasound')}}4D ultrasound</h5>
                                            <p class="card-text">24 Hours Services</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://nccmed.com/wp-content/uploads/2022/01/echocardiogram.png">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.Echocardiogram')}}</h5>
                                            <p class="card-text">24 Hours Services</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://qph.cf2.quoracdn.net/main-qimg-f6d9f781f0e4b7b738940f91a466177f">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{__('form.Impatient_Care')}}</h5>
                                            <p class="card-text">24 Hours Services</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> 
                        <!--  -->
                        <!-- item -->
                        
                        <!--  -->
                    </div>
                </div>
            </div>

            
        </div>

        
    </div>
</section>


</div>
<!-- end of service -->
<div class="container-fluid d-flex abContainer flex-wrap" style="color:black">
    <div class="d-flex flex-column align-items-center justify-content-center aboutImage">
        <div class=" m-1 absolute" style="">
            <img src="{{asset('master/images/clinic.jpg')}}" style="border-radius: 25% 10%;" class="col-8 offset-2 abImg" alt="">
        </div>
    </div>
<div class=" about py-5  pe-md-5"  >
    {{ __ ( 'form.about')}}
</div>
</div>

@endsection