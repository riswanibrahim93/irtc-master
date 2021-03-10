@extends('user.partials.app')
@section('content')
@php
    $CI =& get_instance();
@endphp
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
                {!! validation_errors() !!}
                {!! form_open('password') !!}

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"
                    required>
                </div>

                <div class="form-group">
                    <label>Konfirmasi password</label>
                    <input type="password" name="confirm_password" class="form-control"
                    required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
            </div>
        </div>
    </div>
</div>
@endsection