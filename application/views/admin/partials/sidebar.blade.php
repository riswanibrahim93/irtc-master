@php
    $CI =& get_instance();
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="{{ base_url('panitia') }}" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ base_url('client/images/home/ico_seminar-min.png')}}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Administrator</span>
                    <span class="text-secondary text-small">Panitia</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            
                
                <a class="nav-link" href="{{ base_url('panitia') }}">
                    <span class="menu-title">Pendaftaran</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
                <a class="nav-link" href="{{ base_url('panitia/pembayaran') }}">
                    <span class="menu-title">Pembayaran</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
                <a class="nav-link" href="{{ base_url('panitia/kompetisi') }}">
                    <span class="menu-title">Kompetisi</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            
        </li>
    </ul>
</nav>
