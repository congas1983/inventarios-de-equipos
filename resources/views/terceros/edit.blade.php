@extends('app')

@section('content')

<div class="row">


<div class="col-md-10">

	<h1>Editar tercero</h1>

{!!Form::open(['route' => 'actualizar_tercero'])!!}
{!!Form::model($tercero, ['route' => 'actualizar_tercero', 'role' => 'form'])!!}
{!!Form::hidden('id', $tercero->id)!!}



@include('terceros.partials.formupdate')







<div class="form-group col-xs-12">
{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}

{!!Form::button('Limpiar',['type'=>'reset','class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!}

@stop