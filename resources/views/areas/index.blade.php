@extends('app')
@section('content')
<div class="col-sm-8">
<h2>Areas</h2>
</div><<div class="col-sm-3 col-sm-offset-1 text-right">
			<a href="{{route('crear_area')}}" class="btn btn-success">
				<span class="glyphicon glyphicon-plus"></span>
				Crear 
			</a>
		</div>
<table class="table table-bordered table-striped">
<thead>
<th class="text-center" >#</th><th class="text-center">Codigo</th><th class="text-center">Descripci&oacute;n</th><th class="text-center">Creaci&oacute;n</th><th colspan="2" class="text-center">Acciones</th>
</thead>
<tbody>
@foreach($areas as $area)

<tr>
<td>{{$area->id}}</td><td>{{$area->codigo}}</td><td>{{$area->nombre}}</td><td>{{$area->created_at}}</td>
<td>
 
   

    	<a href="{{route('editar_area', ['id' => $area->id])}}" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-edit"></span>
					 
				</a>
     
    
<td>
    	<a href="{{route('editar_area', ['id' => $area->id])}}" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-remove"></span>
					
				</a></td></tr>

@endforeach

</tbody>
</table>
{!!$areas->render()!!}
	
@endsection
