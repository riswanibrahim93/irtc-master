@extends('user.partials.app')
@section('content')
@php
    $CI =& get_instance();
@endphp
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                @if ($CI->session->flashdata())
                        <div class="alert alert-{{ $CI->session->flashdata('btn') }} alert-dismissible fade show" role="alert">
                                {!! $CI->session->flashdata('message') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                @endif
                @if ($pembayaran)
                    @if ($pembayaran->status == 1)
                        <h4 class="card-title">Bukti pembayaran telah di unggah</h4>
                        <div class="form-group">
                            <div class="alert alert-success fade show" role="alert">
                                Pembayaran telah terkonfimasi oleh panitia
                            </div>
                        </div>
                    @elseif ($pembayaran->status == 0)
                        <h4 class="card-title">Bukti pembayaran telah di unggah </h4>
                        <div class="form-group">
                            <div class="alert alert-primary fade show" role="alert">
                                Pembayaran telah terkonfimasi oleh panitia
                            </div>
                        </div>
                    @elseif ($pembayaran->status == 2)
                        {!! validation_errors() !!}
                        {!! form_open_multipart('pembayaran') !!}
                        <h4 class="card-title">Bukti pembayaran telah di unggah sebelumnya</h4>
                       
                        <div class="form-group">
                            <div class="alert alert-danger fade show" role="alert">
                                mohon maaf, bukti pembayaran anda tidak sesuai, harap ulangi upload bukti pembayaran
                            </div>
                        </div>
                        <h4 class="card-title">Harap ulangi upload bukti pembayaran</h4>
                            <p class="alert alert-danger">*pastikan foto bukti transaksi bisa terbaca dengan jelas</p>
                            <div class="form-group">
                                <img id="img-upload" alt="200x200" data-src="holder.js/200x200" class="img-thumbnail" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNjhkOTBhMTA1NCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2OGQ5MGExMDU0Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjc2NTYyNSIgeT0iNzQuNSI+MTQweDE0MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 200px; height: 200px;">
                                <input accept="image/*" id="imgInp" type="file" class="form-control" name="bukti_pembayaran">
                                <input type="hidden" name="user" value="{{ serialize($CI->session->userdata('id')) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    @endif
                @else
                    {!! validation_errors() !!}
                    {!! form_open_multipart('pembayaran') !!}
                    <h4 class="card-title">Upload bukti pembayaran</h4>
                        <div class="form-group">
                            <img id="img-upload" alt="200x200" data-src="holder.js/200x200" class="img-thumbnail" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNjhkOTBhMTA1NCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2OGQ5MGExMDU0Ij48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQzLjc2NTYyNSIgeT0iNzQuNSI+MTQweDE0MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 200px; height: 200px;">
                            <input accept="image/*" id="imgInp" type="file" class="form-control" name="bukti_pembayaran">
                            <input type="hidden" name="user" value="{{ serialize($CI->session->userdata('id')) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                
                @endif
            </div>
        </div>
    </div>
</div>

@section('js')
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>
@endsection
    
@endsection