@extends('user.partials.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
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
                <h4 class="card-title">Biodata Team</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Nama Team</td>
                                <td>:</td>
                                <td>{{ $user->nama_tim }}</td>
                            </tr>
                            <tr>
                                <td>Ketua Tim</td>
                                <td>:</td>
                                <td>{{ $user->nama_ketua }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Kategori Lomba</td>
                                <td>:</td>
                                <td>{{ $user->nama_lomba }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                </div>
               
            @if ($user->jumlah_anggota > $total_anggota)
                <div class="alert alert-danger fade show mt-3 mb-3" role="alert">
                    Harap untuk di isi data anggota
                </div>
            @endif
            @if ($user->jumlah_anggota && $user->jumlah_anggota > 0)
                <h4 class="card-title mt-3"> Anggota Tim </h4>
                @php
                    $anggota_tim_inserted = count($anggota_tim);
                    $jumlah_anggota  = $user->jumlah_anggota;
                @endphp
                @if ($jumlah_anggota == $anggota_tim_inserted)
                    @foreach ($anggota_tim as $anggota)
                        <div class="table-responsive">
                            <table  class="table table-hover mb-3">
                                <tr>
                                    <td>Nama Anggota {{ $loop->iteration }}</td>
                                    <td>:</td>
                                    <td>{{ $anggota->nama_anggota }}</td>
                                </tr>
                                <tr>
                                    <td>Email Anggota {{ $loop->iteration }}</td>
                                    <td>:</td>
                                    <td>{{ $anggota->email }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Anggota {{ $loop->iteration }}</td>
                                    <td>:</td>
                                    <td>{{ $anggota->alamat }}</td>
                                </tr>
                            </table>
                        </div>
                    @endforeach
                    
                    
                @else
                {!! form_open('dashboard') !!}
                {!! validation_errors() !!}
                        <div class="row">
                        @for ($i = 1; $i <= $jumlah_anggota; $i++)
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Anggota {{ $i }}</label>
                                        <input type="text" class="form-control" name="nama_anggota[]">
                                    </div>

                                    <div class="form-group">
                                        <label>Email Anggota {{ $i }}</label>
                                        <input type="text" class="form-control" name="email_anggota[]">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Alamat Anggota {{ $i }}</label>
                                        <input type="text" class="form-control" name="alamat_anggota[]">
                                    </div>
                                </div>
                            </div>
                        @endfor
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                    
                    {!! form_close() !!}
                @endif
                @endif
               
            </div>
        </div>
    </div>
</div>
@endsection
