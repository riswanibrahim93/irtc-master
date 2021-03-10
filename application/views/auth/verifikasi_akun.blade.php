<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Credia.id</title>
        <link rel="icon" href="client/images/favicon.ico" type="image/ico" />
        <link rel="stylesheet" href="client/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="client/custom/css/register.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="client/custom/js/jquery.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    </head>
    <body id="itfest">
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <a href="/" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
                    <div class="logo-nav"></div>
                </a>
            </div>
        </nav>
        <header id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="login-text" style="font-size: 40px">Verifikasi Akun</h2>
                    </div>
                    <div class="col-md-10">
                        <div class="col-xs-12 col-md-10">
                            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                                <div class="card-block">
                                    {!! form_open('verifikasi-akun',['method' => 'get']) !!}
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="alert alert-primary">Silahkan cek kotak masuk / spam pada email anda untuk mengetahui kode verifikasi</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Masukkan Kode Verifikasi</label>
                                                <input type="text" name="kode_verifikasi" class="form-control" placeholder="Kode verifikasi" required>
                                            </div>
                                            <div class="col-md-6 col-xs-12 offset-md-3">
                                                <button type="submit" class="btn-block btn btn-img">Verifikasi</button>
                                            </div>
                                        </div>
                                    </div>
                                    {!! form_close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </header>
        <script src="client/custom/js/jquery.min.js"></script>
        <script src="client/custom/js/bootstrap.min.js"></script>
    </body>
</html>