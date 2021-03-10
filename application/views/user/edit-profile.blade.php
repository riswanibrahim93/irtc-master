@extends('user.partials.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                {!! validation_errors() !!}
                {!! form_open('profile') !!}
                <h4 class="card-title mb-3">Biodata Team</h4>
                    <div class="form-group">
                        <h5>Nama Team</h5>
                        <input class="form-control" type="text" name="nama_team" value="{{ $user->nama_tim }}">
                    </div>
                    <div class="form-group">
                        <h5>Nama Ketua</h5>
                        <input class="form-control" type="text" name="nama_ketua" value="{{ $user->nama_ketua }}">
                    </div>
                    <div class="form-group">
                        <h5>Email</h5>
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <h5>Alamat</h5>
                        <input class="form-control" type="text" name="alamat" value="{{ $user->alamat }}">
                    </div>
                    <div class="form-group">
                        <h5>Jumlah Anggota</h5>
                        <select class="form-control" name="jumlah_anggota" required>
                            <option value="0"  
                                    @if ($user->jumlah_anggota == 0)
                                        selected="selected"
                                    @endif>Peserta Individu</option>
                            <option value="1"
                                    @if ($user->jumlah_anggota == 1)
                                        selected="selected"
                                    @endif>1</option>
                            <option value="2"
                                    @if ($user->jumlah_anggota == 2)
                                        selected="selected"
                                    @endif>2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5>Kategori Lomba</h5>
                        <select name="kategori_lomba" class="form-control">
                            @foreach ($kategori_lomba as $lomba)
                                <option value="{{ $lomba->id }}"
                                    @if ($lomba->id == $user->kategori_lomba_id)
                                        selected="selected"
                                    @endif
                                    >{{ $lomba->nama_lomba }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    
                </div>
            </form>
               
            </div>
        </div>
    </div>
</div>
@endsection