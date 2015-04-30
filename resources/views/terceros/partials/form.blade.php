<div class="col-sm-6">

<div class="form-group">

{!!Form::text('nit',null,['class'=>'form-control floating-label','placeholder'=>'NIT:'])!!}

</div>
<div class="form-group">

{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'Nombre:'])!!}

</div>
<div class="form-group">

{!!Form::select('rol',
['cliente' => 'Cliente','proveedor' => 'Proveedor'],
null,
['class' => 'form-control floating-label','placeholdel' => 'Rol:']
)!!}

</div>
<div class="form-group">

{!!Form::text('direccion',null,['class'=>'form-control floating-label','placeholder'=>'Direcci&oacute;n:'])!!}

</div>
<div class="form-group">

{!!Form::text('telefono',null,['class'=>'form-control floating-label','placeholder'=>'Tel&eacute;fono:'])!!}

</div>
</div>

<div class="col-sm-6">
<div class="form-group">

{!!Form::text('email',null,['class'=>'form-control floating-label','placeholder'=>'Email:'])!!}

</div>
<div class="form-group">

{!!Form::textarea('notas',null,['class'=>'form-control floating-label', 'rows'=>'8','placeholder'=>'Notas:'])!!}

</div>
</div>