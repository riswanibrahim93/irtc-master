@php
    $CI =& get_instance();
@endphp
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ site_url('dashboard') }}"><img src="{{ base_url('client/images/login/logo.png')}}" style="width:80px" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ site_url('dashboard') }}"><img src="{{ base_url('server/images/logo-mini.svg')}}"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-text">
                    <b class="mb-1 text-black">{{ $CI->session->userdata('nama_tim') }} </b>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ base_url('logout') }}">
                        <i class="mdi mdi-logout mr-2 text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
