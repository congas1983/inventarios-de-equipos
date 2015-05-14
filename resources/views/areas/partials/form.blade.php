<div class="col-sm-6">

<div class="form-group">

{!!Form::text('codigo',null,['class'=>'form-control','autofocus','placeholder'=>'Codigo:','required'])!!}
@if($errors->has('codigo'))
<p class="text-danger">{{$errors->first('codigo')}}</p>
@endif
</div>
<div class="form-group">

{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'Nombre:','required'])!!}
@if($errors->has('nombre'))
<p class="text-danger">{{$errors->first('nombre')}}</p>
@endif
</div>

</div>