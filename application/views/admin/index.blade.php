@extends('admin.partials.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Pendaftar</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama Tim </th>
                            <th>Nama Ketua </th>
                            <th>Email </th>
                            <th>Kategori Lomba </th>
                            <th>Anggota </th>
                            <th>Status Pembayaran</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama_tim }}</td>
                                    <td>{{ $user->nama_ketua }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->nama_lomba }}</td>
                                    <td></td>
                                    <td>
                                        @if (!is_null($user->status_pembayaran))
                                            @if ($user->status_pembayaran == 1)
                                                <label class="label label-warning">Belum terkonfirmasi</label>
                                            @else
                                                <label class="label label-success">Pembayaran telah terkonfirmasi</label>
                                            @endif
                                        @else
                                            <label class="label label-danger">Belum melakukan Pembayaran</label>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                
               
                
               
            </div>
        </div>
    </div>
</div>
@endsection
