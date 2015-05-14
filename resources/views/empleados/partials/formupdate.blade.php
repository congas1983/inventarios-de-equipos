<div class="col-sm-6">

<div class="form-group">
	{!!Form::label('nit', 'Nit', ['class' => 'control-label'])!!}
	{!!Form::text('nit', null, ['placeholder' => 'Nit','class' => 'form-control','required','maxlength' => '255'])!!}

@if($errors->has('nit'))
<p class="text-danger">{{$errors->first('nit')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('nombre', 'Nombre', ['class' => 'control-label'])!!}
{!!Form::text('nombre',null,['class' => 'form-control','required'])!!}
@if($errors->has('nombre'))
<p class="text-danger">{{$errors->first('nombre')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('rol', 'Tipo', ['class' => 'control-label'])!!}
{!!Form::select('rol',
['cliente' => 'Cliente','proveedor' => 'Proveedor'],
null,
['class' => 'form-control','placeholder' =>'Rol' ,'class' => 'form-control','required']
)!!}
@if($errors->has('rol'))
<p class="text-danger">{{$errors->first('rol')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('direccion', 'Direcci&oacute;n', ['class' => 'control-label'])!!}
{!!Form::text('direccion',null,['placeholder'=>'Direcci&oacute;n','class' => 'form-control','required'])!!}
@if($errors->has('direccion'))
<p class="text-danger">{{$errors->first('direccion')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('telefono', 'Tel&eacute;fono', ['class' => 'control-label'])!!}
{!!Form::text('telefono',null,['placeholder'=>'Tel&eacute;fono','class' => 'form-control','required'])!!}
@if($errors->has('telefono'))
<p class="text-danger">{{$errors->first('telefono')}}</p>
@endif
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
{!!Form::label('email', 'Correo', ['class' => 'control-label'])!!}
{!!Form::text('email',null,[ 'maxlength'=>'20','placeholder'=>'Email','class' => 'form-control'])!!}

</div>
<div class="form-group">
{!!Form::label('notas', 'Notas', ['class' => 'control-label'])!!}
{!!Form::textarea('notas',null,['rows'=>'8','placeholder'=>'Notas','class' => 'form-control'])!!}

</div>
</div>














