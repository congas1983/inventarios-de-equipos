@extends('app')
@section('content')
<h3>Registro centro de costo</h3>
<hr/>

{!!Form::open(['route' => 'guardar_ccosto'])!!}
@include('ccostos.partials.form')
<div class="form-group col-xs-12">
<span class="glyphicon glyphicon-arrow-up"></span>
{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])!!}

<a href="{{route('ccostos')}}" class="btn btn-danger">
					<span class="glyphicon glyphicon-arrow-left"></span>
					Cancelar
				</a>
</div>

{!!Form::close()!!}



@endsection