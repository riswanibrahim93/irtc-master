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
                        <h2 class="login-text" style="font-size: 40px">Register</h2>
                    </div>
                    <div class="col-md-10">
                        {!! validation_errors() !!}
                    </div>
                    <div class="col-xs-12 col-md-10">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="card-block">

                            {!! form_open('register') !!}
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <h5 class="card-title">Pendaftaran Team</h5>
                                        <hr>

                                        <div class="form-group">
                                            <label>Nama Team</label>
                                            <input type="text" name="nama_team" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ketua</label>
                                            <input type="text" name="nama_ketua" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Email Aktif</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Anggota (Tidak Termasuk Ketua)</label>
                                            <select class="form-control" name="jumlah_anggota" required>
                                                <option value="">-Pilih Jumlah Anggota</option>
                                                <option value="0">Peserta Individu</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Pilih Kategori lomba</label>
                                            <select class="form-control" name="kategori_lomba" required>
                                                <option value="">-Pilih kategori lomba-</option>
                                                @foreach ($kategori_lomba as $item)
                                                    <option value="{{ $item->id }}"> {{ $item->nama_lomba }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"
                                            required>
                                        </div>

                                        <div class="form-group">
                                            <label>Ulangi password</label>
                                            <input type="password" name="confirm_password" class="form-control"
                                            required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 offset-md-3">
                                    <button type="submit" class="btn-block btn btn-img">Register</button>
                                </div>
                                {!! form_close() !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="link-signup">
                            <span>Do you have an account ? <a href="{{ base_url('login') }}">Log In</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script src="client/custom/js/jquery.min.js"></script>
        <script src="client/custom/js/bootstrap.min.js"></script>
    </body>
</html>