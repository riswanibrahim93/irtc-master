<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credia.id</title>
    <link rel="icon" href="{{base_url('client/images/favicon.ico')}}" type="image/ico" />
    <link rel="stylesheet" href="{{base_url('client/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{base_url('client/custom/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="{{base_url('client/custom/js/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body id="itfest">
    @include('client.template.nav')

    @yield('content')
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
    <script type="text/javascript">
        // Scrolling Effect
        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
                $('.logo-nav').addClass('logo-nav-white');
            } else {
                $('nav').removeClass('black');
                $('.logo-nav').removeClass('logo-nav-white');
            }
        })

    </script>
    <script src="{{base_url('client/custom/js/jquery.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/popper.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/bootstrap.min.js')}}"></script>
    <script src="{{base_url('client/custom/js/animatescroll.js')}}"></script>
    <script src="{{base_url('client/custom/js/main.js')}}"></script>
    <script>
        window.sr = ScrollReveal({
            reset: true
        });
        sr.reveal('.col-header', {
            duration: 2000,
            origin: 'left',
            distance: '200px'
        });
        sr.reveal('.col-test', {
            duration: 2000,
            origin: 'left',
            distance: '200px'
        });
        sr.reveal('.col-about-2', {
            duration: 2000,
            delay: 500,
            origin: 'bottom',
            distance: '200px'
        });
        sr.reveal('.col-kompetisi', {
            duration: 2000,
            origin: 'left',
            distance: '200px'
        });
        sr.reveal('.card-columns', {
            duration: 2000,
            delay: 500,
            origin: 'bottom',
            distance: '100px'
        });
        sr.reveal('.col-acara', {
            duration: 2000,
            origin: 'left',
            distance: '200px'
        });
        sr.reveal('.video-content', {
            duration: 2000,
            delay: 500,
            origin: 'bottom',
            distance: '200px'
        });
        sr.reveal('.col-timeline', {
            duration: 2000,
            origin: 'top',
            distance: '100px'
        });
        sr.reveal('.text-timeline', {
            duration: 2000,
            delay: 500,
            origin: 'left',
            distance: '100px'
        });

    </script>
</body>

</html>
