
@if(session()->has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session()->get('success')}}
</div>
@elseif(session()->has('error'))

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session()->get('error')}}
</div>

@endif

