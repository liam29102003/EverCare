
<div class="design">
    <nav class="navbar navbar-expand-lg bg-gray py-1 pt-0 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" wire:navigate><img class="logo" src="{{asset('user/assets/images/logo.png')}}"></a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body  d-flex flex-column flex-lg-row p-2 p-lg-0">
          <ul class="navbar-nav d-flex justify-content-center align-items-center fs-5 flex-grow-1 mt-0 ml-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-question"></i>&nbsp;FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blogList" wire:navigate><i class="fa-sharp fa-solid fa-newspaper"></i>&nbsp;Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/doctor" wire:navigate><i class="fa-sharp fa-solid fa-user-doctor"></i>&nbsp;Doctors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-address-book"></i>&nbsp;Contact</a>
                
            </li>
            
          </ul>
          <div class="d-flex flex-column justify-content-center flex-lg-row align-items-center">
            
            <div class="btn-dg">
            <a href="/login" wire:navigate class="btnn text-decoration-none text-dark" type="submit">Log in</a>
            <a href="/register" wire:navigate.hover class="btnn  text-decoration-none text-dark" type="submit">Sign up</a>
            </div>
            
          
          </div>
        </div>
      </div>
    </div>
    </nav>
    </div>
