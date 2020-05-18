@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger m-0 rounded-0" role="alert">
    {{$error}}
</div>

@endforeach
@endif


@if(session('error'))
<div class="alert alert-danger m-0 rounded-0" role="alert">
    {{session('error')}}
</div>
@endif

@if(session('success'))
<div class="alert alert-success m-0 rounded-0" role="alert">
    {{session('success')}}
</div>
@endif
