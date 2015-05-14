@extends('app')
@section('content')

<h1>Registro tercero</h1>

{!!Form::open(['route' => 'guardar_tercero'])!!}
@include('terceros.partials.form')
<div class="form-group col-xs-12">
<span class="glyphicon glyphicon-arrow-up"></span>
{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}

<a href="{{route('terceros')}}" class="btn btn-danger">
					<span class="glyphicon glyphicon-arrow-left"></span>
					Cancelar
				</a>
</div>

{!!Form::close()!!}



@endsection