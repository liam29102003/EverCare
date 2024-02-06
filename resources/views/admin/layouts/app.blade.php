<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Horizontal Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />
    @livewireStyles

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    {{-- <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" /> --}}

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}" data-navigate-track></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}" data-navigate-track></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      @yield('styles')
<script>
        // JavaScript control for the dropdown
        document.addEventListener('livewire:navigated', function() {
            var dropdownButton = document.getElementById('hello');
            var dropdownMenu = document.querySelector('.dropdown-menu1');
            console.log('Hello')

            dropdownButton.addEventListener('click', function() {
                // Toggle the 'show' class to display/hide the dropdown menu
                dropdownMenu.classList.toggle('d-none');
            });

            // Close the dropdown when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('d-none');
                }
            });
            var dropdownButton1 = document.getElementById('hello1');
            var dropdownMenu2 = document.querySelector('.dropdown-menu2');
            console.log('Hello')

            dropdownButton1.addEventListener('click', function() {
                // Toggle the 'show' class to display/hide the dropdown menu
                dropdownMenu2.classList.toggle('d-none');
            });

            // Close the dropdown when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!dropdownButton1.contains(event.target) && !dropdownMenu2.contains(event.target)) {
                    dropdownMenu2.classList.add('d-none');
                }
            });
        });
    </script>
  <style>
    .select{
      background-color:#FFFDD1 !important;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }
    li a{
      margin: :30px;
      border-radius: 10px;
      border-botttom:1px solid black;
    }
    li a:hover{
      background-color: #FFFDD1;
    }
    .pagination li span{
      background-color:#9d926a !important;
      color:white !important
    }
    input, select, textarea{
      border-color: #9d926a !important;
    }
    th{
      transition: all 0.4s ease-in-out;
    }
    th:hover{
      cursor: pointer;
      background-color:#F6E8B1
    }
    .profile_img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .doctor-profile {
            font-family: 'Lato', sans-serif;
            margin-top: 10px;
        }
        .card {
            border-radius: 10px;
            
        }
        .rating {
            color: #f8ce0b;
        }
        .table-bordered
        {
          border: 1px solid #9d926a !important;
        }

  </style>
  @livewireStyles
  </head>

    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script> --}}

  <body style="background-color: #fffdd2"   >

    <div class="layout-wrapper layout-content-navbar "  >
        <div class="layout-container">
          <!-- Menu -->
  
          <aside id="layout-menu" class="layout-menu menu-vertical menu shadow" style="background-color: #F6E8B1">
            <div class="app-brand demo text-center" style="margin: auto">
              <a href="#" class="app-brand-link mt-3" >
                <span class="app-brand-logo demo fs-2  pe-3" style=" display: block;
                flex-grow: 0;
                flex-shrink: 0;
                overflow: hidden;
                min-height: 1px;">
                
                <span class="app-brand-text demo menu-text fw-bolder fs-4 text-center  " style="flex-shrink: 0;
                opacity: 1; color: #5d5d5a;
                transition: opacity 0.15s ease-in-out; font-family:fantasy; font-style: italic; font-size: large;"><i class="fa-solid fa-staff-snake me-2 fs-1"></i><span>EVER CARE</span></span>
              </a>
              
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
            <hr style="background-color: #9d926a !important">
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1 text-center" style="margin: auto">
              <!-- Dashboard -->
              <li class="menu-item  " >
                <a href="{{route('dashboard')}}" class="menu-link  mb-0 {{request()->segment(2) === 'dashboard' ? 'select' : '' }}" style="      color: #9d926a ;
                border-bottom: 3px solid #9d926aa;">
                    <i class="fa-solid fa-user-tie me-3 fs-5"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
            
              <li class="menu-item ">
                <a href="{{ route('doctor.list') }}" wire:navigate  class="menu-link {{request()->segment(2) === 'doctor' ? 'select' : '' }}" style="      color: #9d926a ;
                border-bottom: 3px solid #9d926aa;">
                    <i class="fa-solid fa-user-doctor me-3 fs-5"></i>
                  <div data-i18n="Analytics">doctor</div>
                </a>
              </li>
              <li class="menu-item ">
                <a href="{{ route('staff.list') }}" wire:navigate  class="menu-link {{request()->segment(2) === 'staff' ? 'select' : '' }}" style="      color: #9d926a ;
                border-bottom: 3px solid #9d926aa;">
                    <i class="fa-solid fa-user-nurse me-3 fs-5"></i>
                  <div data-i18n="Analytics">Staff</div>
                </a>
              </li>
              <li class="menu-item ">
                <a href="{{route('pharamcy.list')}}" wire:navigate  class="menu-link {{request()->segment(2) === 'pharmacy' ? 'select' : '' }}" style="      color: #9d926a ;
                border-bottom: 3px solid #9d926aa;">
                    <i class="fa-solid fa-pills me-3 fs-5"></i>
                  <div data-i18n="Analytics">Medicine</div>
                </a>
              </li>
              <li class="menu-item ">
                <a href="{{route('finance.expense.list')}}" wire:navigate  class="menu-link {{request()->segment(2) === 'finance' ? 'select' : '' }}" style="      color: #9d926a ;
                border-bottom: 3px solid #9d926aa;">
                    <i class="fa-solid fa-coins me-3"></i>
                  <div data-i18n="Analytics">Finance</div>
                </a>
              </li>
  
              <!-- Layouts -->
              {{-- <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Account Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                      <div data-i18n="Account">Account</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                      <div data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                      <div data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li> --}}
  
              <!-- Components -->
              
  
  
            </ul>
          </aside>
          <!-- / Menu -->
  
          <!-- Layout container -->
          <div class="layout-page ">
            <!-- Navbar -->
  
            <nav
              class="layout-navbar   container-xxl navbar navbar-expand-xl navbar-detached align-items-center"
              id="layout-navbar" style="background-color:#faf8e3 !important; color:#9d926a !important"
            >
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="#">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>
  
              <div class="navbar-nav-right d-flex align-items-center " id="navbar-collapse">
                <div><span style="font-size: 20px;"><i class="fa-sharp fa-solid fa-house-user me-3"></i>Admin's Dashboard</span></div>
  
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- Place this tag where you want the button to render. -->
                 
  
                  <!-- User -->
                  <li class="nav-item  ">
                    <div  class="d-block" id="hello1" >
                      <div class="avatar avatar-online   ">
                        <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </div>
                    <div class="card dropdown-menu2  d-none" style="margin-top:300px;">
                      <ul class=" ps-0 "  style = "list-style-type:none; margin:auto !important" >
                        <li class=" ms-0">
                          <a class="dropdown-item" href="#">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                  <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <span class="fw-semibold d-block">John Doe</span>
                                <small class="text-muted">Admin</small>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <div class="dropdown-divider"></div>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                          </a>
                        </li>
                        
                        <li>
                          <div class="dropdown-divider"></div>
                        </li>
                        <li>
                          <form action="{{route('logout')}}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-sm">logout</button>
                        </form>
                        </li>
                      </ul>
                    </div>
                    
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>
  
            <!-- / Navbar -->
  
            <!-- Content wrapper -->
            <div class="content-wrapper " >
              <!-- Content -->
  
              <div class="container-xxl flex-grow-1 ">
                <!-- Layout Demo -->
                <div class="layout-demo-wrapper ">
                 
                  {{-- <div class="layout-demo-info "> --}}
                    @yield('content')
                  {{-- </div> --}}
                </div>
                <!--/ Layout Demo -->
              </div>
              <!-- / Content -->
              <footer class="content-footer footer bg-white p-3 mt-3 m-4 rounded shadow" style="background-color:#faf8e3 !important; color:#9d926a !important" >
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    2024
                    , made with ❤️ by
                    Group 2
                  </div>
                  <div>
                    <div class="dropdown dropup footer-link me-3">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        id="hello"
                      >
                        Currency
                      </button>
                      <div class=" dropdown-menu1 dropup card d-none " style="position:absolute !important; margin-top:-210px">
                        <a class="dropdown-item" href=""><i class="bx bx-dollar"></i> USD</a>
                        <a class="dropdown-item" href=""><i class="bx bx-euro"></i> Euro</a>
                        <a class="dropdown-item" href=""><i class="bx bx-pound"></i> Pound</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=""><i class="bx bx-bitcoin"></i> Bitcoin</a>
                      </div>
                    </div>
                    <a href="" class="btn btn-sm btn-outline-danger"
                        ><i class="bx bx-log-out-circle"></i> Logout</a
                      >
                  </div>
                </div>
              </footer>
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

      </div>
      
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
   
  </body>
</html>
