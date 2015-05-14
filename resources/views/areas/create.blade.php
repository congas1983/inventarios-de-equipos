@extends('app')
@section('content')

<h2>Registro area</h2>

{!!Form::open(['route' => 'guardar_area'])!!}
@include('areas.partials.form')
<div class="form-group col-xs-12">
{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}

<a href="{{route('areas')}}" class="btn btn-danger">
					<span class="glyphicon glyphicon-arrow-left"></span>
					Cancelar
				</a>
</div>

{!!Form::close()!!}



@endsection