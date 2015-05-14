@extends('app')
@section('content')
@include('ccostos.partials.buscar')
<table class="table table-striped" >


<thead><tr><th colspan="" class="text-center"><h4>Centro de costos</h4></th></tr><tr>
<th class="text-center">#</th>
<th class="text-center">Codigo</th>
<th class="text-center">Nombre</th>
<th class="text-center">Area</th>
<th class="text-center">Ubicación</th>
<th class="text-center">Creaci&oacute;n</th>
<th class="text-center" class="text-center" colspan="2">Acciones</th>

</tr></thead>
<tbody>
@foreach($ccostos as $ccosto)
<tr data-id="{{$ccosto->id}}"><td>{{$ccosto->id}}</td>
<td class="text-center">{{$ccosto->codigo}}</td>
<td class="text-center">{{$ccosto->nombre}}</td>
<td class="text-center">{{$ccosto->Area->area}}</td>
<td class="text-center">{{$ccosto->departamento}}:{{$ccosto->ciudad}}</td>
<td class="text-center" >{{$ccosto->created_at}}</td>

<td class="text-center">
 
   

    	<a href="{{route('editar_tercero', ['id' => $ccosto->id])}}" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-edit"></span>
					 
				</a>
     
    
<td class="text-center"	>



    	<a href="{{route('borrar_tercero', ['id' => $ccosto->id])}}" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-remove"></span>
				
				</a></td>
</tr>
@endforeach

</tbody>
</table>
<div class="form-group col-xs-12">
{!!$ccostos->render()!!}
</div>	

@endsection