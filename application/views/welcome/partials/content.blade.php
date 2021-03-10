<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credia.id</title>
    <link rel="icon" href="{{base_url('client/images/favicon.ico')}}" type="image/ico" />
    <link rel="stylesheet" href="{{base_url('client/bootstrap/bootstrap.min.css')}}">
    @yield('cssLink')
    <link rel="stylesheet" href="{{base_url('client/custom/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="{{base_url('client/custom/js/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body id="itfest">
    <nav class="navbar navbar-expand-sm fixed-top black">
        <div class="container">
            <a href="/credia-master" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
                <div class="logo-nav logo-nav-white"></div>
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ base_url('login') }}"><button class="btn px-5 signup">Login/Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('deskripsi')
    <section id="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-kompetisi">
                    <div>
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{base_url('client/custom/js/jquery.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/popper.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/bootstrap.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/animatescroll.js')}}"></script>
    <script src="{{base_url('client/custom/js/main.js')}}"></script>
</body>

</html>
