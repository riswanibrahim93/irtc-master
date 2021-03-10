@php
    $CI =& get_instance();
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ base_url('dashboard') }}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ base_url('client/images/home/ico_seminar-min.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ $CI->session->userdata('nama_tim') }}</span>
                    <span class="text-secondary text-small">Peserta</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            
                
                <a class="nav-link" href="{{ base_url('dashboard') }}">
                    <span class="menu-title">Profil</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
                <a class="nav-link" href="{{ base_url('pembayaran') }}">
                    <span class="menu-title">Pembayaran</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
                <a class="nav-link" href="{{ base_url('kompetisi') }}">
                    <span class="menu-title">Kompetisi</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            
        </li>
    </ul>
</nav>
