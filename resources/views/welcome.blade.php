
<a href="{{route('admin.login')}}">Admin Login</a>
<a href="{{route('receptionist.login')}}">Rec Login</a>

@extends('master')
@section('content')
<div class="container-fluid  mt-5 mt-lg-0 pt-5 pt-lg-0 mb-5 mb-lg-0   " style="height: 100vh;" >
    <div class="row h-100">
        <div class="leftHero col-12 col-lg-5  d-flex flex-column justify-content-center align-items-center ">
            <h4 class="text-start">သင်ရဲ့ ယုံကြည်အားထားရာ</h4>
            <h1 class="text-start brand" style="text-shadow: black 1px 0 3px; font-size:60px"><i class="fa-solid fa-staff-snake me-2 "></i>EVER CARE</h1>
            <p class="text-center">ကျန်းမာသော ခန္ဓာကိုယ်ဖြင့် ပျော်ရွှင်သော ဘဝကို တည်ဆောက်ပါ။</p>
            <a href="{{route('appointment.form')}}" wire:navigate class="btn ownBtn mt-3">ရက်ချိန်းယူပါ&nbsp;<i class="fa-regular fa-calendar"></i></a>
       </div>
       <div class="rightHero col-12 col-lg-7  text-center " >
    
        <img src="{{asset('master/images/hero.png')}}" alt="" class="w-100  h-100"  >
       </div>
    </div>
  
   
</div>
<div class="container-fluid  d-flex justify-content-between " style="background-color:  #B3C99C;margin-top: 160px;">
<div class="w-25 text-center ms-3">
    <img src="{{asset('master/images/patient.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#fffdd2">Patients</h3>
    <h4 class="" style="color:#fffdd2">100+</h4>
</div>
<div class="w-25 text-center">
    <img src="{{asset('master/images/doctor.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#fffdd2">Doctors</h3>
    <h4 class="" style="color:#fffdd2">30+</h4>
</div>
<div class="w-25 text-center me-3">
    <img src="{{asset('master/images/receptionist.png')}}" class="w-75 " style="border-radius: 50%;position: relative;margin-top: -40%;">
    <h3 class="" style="color:#fffdd2">Staffs</h3>
    <h4 class="" style="color:#fffdd2">40+</h4>
</div>
</div>
<!-- End of Hero section  -->

<!-- Start of service section -->
<div class="mt-5 mb-5 container">
<h4 class="title">
    ရရှိနိုင်သောကျန်းမာရေးဝန်ဆောင်မှုများ
    <div class="titleLine"></div>
</h4>
  

  <section class="pt-5 pb-1">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3"></h3>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-dark mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- item -->
                        <div class="carousel-item active w-100">
                            <div class="row">

                                <div class="col-md-4 mb-3 p-5 pt-0">
                                    <div class="card border-0 shadow-sm">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">X-ray</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 p-5 pt-0">
                                    <div class="card border-0 shadow-sm">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">X-ray</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>

                                    </div>
                                </div><div class="col-md-4 mb-3 p-5 pt-0">
                                    <div class="card border-0 shadow-sm">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">X-ray</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="carousel-item  w-100">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">X-ray</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">အထွေထွေဆရာဝန်များ</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">အထွေထွေဆရာဝန်များ</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item w-100">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">X-ray</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">အထွေထွေဆရာဝန်များ</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">အထွေထွေဆရာဝန်များ</h5>
                                            <p class="card-text">၂၄ နာရီ</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
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
<div class="container-fluid d-flex abContainer flex-wrap" style="background-color: #5d5d5a;color:white">
    <div class="d-flex flex-column align-items-center justify-content-center aboutImage">
        <div class=" m-1 absolute" style="">
            <img src="{{asset('master/images/clinic.jpg')}}" style="border-radius: 25% 10%;" class="col-8 offset-2 abImg" alt="">
        </div>
    </div>
<div class=" about py-5  pe-md-5" >
    Ever Care Clinic သည် 2023 ခုနှစ် မတ်လ 18 ရက်နေ့တွင် ဖွင့်လှစ်ခဲ့သော 3 ထပ်တိုက် အဆောက်အဦး 
    ဖြစ်ပါသည်။ ကျွန်ုပ်တို့သည် ခေတ်မီ ဆေးဘက်ဆိုင်ရာ စက်ကိရိယာများဖြင့် ဘက်စုံဆေးဘက်ဆိုင်ရာ ဝန်ဆောင်မှုကို 
    ဆောင်ရွက်ပေးပါသည်။ သက်ဆိုင်ရာဌာနအသီးသီးရှိ ကျွမ်းကျင်ဝန်ထမ်းများမှ ကျွမ်းကျင်သော ကျွမ်းကျင်ဝန်ထမ်းများမှ 
    ကောင်းစွာလေ့ကျင့်ထားသော နေထိုင်မှုဆိုင်ရာဆရာဝန်များ၊ သူနာပြုများနှင့် ကျွမ်းကျင်ဝန်ထမ်းများမှ 
    ပံ့ပိုးပေးသော ကျွန်ုပ်တို့၏လူနာအား အမြန်ထိရောက်သော ကုသမှုကို ကျွန်ုပ်တို့ အလေးထားပါသည်။
</div>
</div>

@endsection