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
                            <th>Kategori Lomba</th>
                            <th>Bukti Transfer </th>
                            <th>Status</th>
                            <th>Aksi </th>
                        </thead>
                        <tbody>
                            @foreach ($pembayaran as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_tim }}</td>
                                    <td>{{ $item->nama_lomba }}</td>
                                    <td>
                                        <a target="_blank" href="{{ base_url('img/bukti_transfer/'.$item->bukti_transfer) }}">Lihat</a>
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                            Pembayaran masuk
                                        @elseif($item->status == 0)
                                            Terkonfirmasi
                                        @else
                                            Tertolak
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 1)
                                            <a href="{{ base_url('panitia/pembayaran/process/acc/'.$item->id) }}" class="btn btn-sm btn-success">Acc</a>
                                            <a href="{{ base_url('panitia/pembayaran/process/dec/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                        @elseif($item->status == 0)
                                            <a href="{{ base_url('panitia/pembayaran/process/dec/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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