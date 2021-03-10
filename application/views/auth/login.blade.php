<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credia.id</title>
    <link rel="icon" href="client/images/favicon.ico" type="image/ico" />
    <link rel="stylesheet" href="client/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="client/custom/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="client/custom/js/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body id="itfest">
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
                <div class="logo-nav"></div>
            </a>
        </div>
    </nav>

    <main id="about">
        <div class="container">
            <div class="row">
                <div class="col col-header">
                    <h2 class="login-text">Login</h2>
                    <div class="col-md-6">
                        {!! validation_errors() !!}
                        @php
                        $CI =& get_instance();
                        @endphp


                        @if ($CI->session->flashdata())
                        <div class="alert alert-{{ $CI->session->flashdata('btn') }} alert-dismissible fade show" role="alert">
                                {{ $CI->session->flashdata('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                    </div>




                    {!! form_open('login') !!}
                        <div class="input-login">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-img">Login</button>
                        </div>
                    </form>
                    <div class="link-signup">
                        <span>Dont' have an account ? <a href="{{ base_url('register') }}">Sign Up</a> </span>
                    </div>
                </div>
            </div>
        </div>
</main>

    <script src="client/custom/js/jquery.min.js"></script>
    <script src="client/custom/js/bootstrap.min.js"></script>
</body>

</html>
