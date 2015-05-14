

@extends('app')

@section('content')


@include('terceros.partials.buscar')


<table class="table table-striped" >


<thead><tr><th colspan="10" class="text-center"><h4>Proveedores</h4></th></tr><tr>
<th class="text-center">#</th>
<th class="text-center">Nit</th>
<th class="text-center">Nombre</th>
<th class="text-center">Rol</th>
<th class="text-center">Direcci&oacute;n</th>
<th class="text-center">Tel&eacute;fono</th>
<th class="text-center">Email</th>
<th class="text-center">Notas</th>
<th class="text-center">Creaci&oacute;n</th>
<th class="text-center" class="text-center" colspan="2">Acciones</th>

</tr></thead>
<tbody>
@foreach($terceros as $tercero)
<tr data-id="{{$tercero->id}}"><td>{{$tercero->id}}</td>
<td>{{$tercero->nit}}</td>
<td>{{$tercero->nombre}}</td>
<td>{{$tercero->rol}}</td>
<td>{{$tercero->direccion}}</td>
<td>{{$tercero->telefono}}</td>
<td>{{$tercero->email}}</td>
<td>{{$tercero->notas}}</td>
<td>{{$tercero->created_at}}</td>
<td>
 
   

    	<a href="{{route('editar_tercero', ['id' => $tercero->id])}}" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-edit"></span>
					 
				</a>
     
    
<td>



    	<a href="{{route('borrar_tercero', ['id' => $tercero->id])}}" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-remove"></span>
				
				</a></td>
</tr>
@endforeach

</tbody>
</table>
<div class="form-group col-xs-12">
{!!$terceros->render()!!}
</div>	







@endsection




