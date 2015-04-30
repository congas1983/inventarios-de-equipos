@extends('app')
@section('content')

<h1>Registro tercero</h1>

{!!Form::open(['route' => 'tercero.store'])!!}
@include('terceros.partials.form')
<div class="form-group">
{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}

{!!Form::button('Limpiar',['type'=>'reset','class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!}



@endsection