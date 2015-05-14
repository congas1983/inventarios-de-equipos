@extends('app');
@section('content');


@include('empleados.partials.buscar')
<table class="table table-striped" >


<thead><tr><th colspan="10" class="text-center"><h4>Empleados</h4></th></tr><tr>
<th class="text-center">#</th>
<th class="text-center">Cedula</th>
<th class="text-center">Nombre completo</th>
<th class="text-center">Tel&eacute;fono</th>
<th class="text-center">Celular</th>

<th class="text-center">Email</th>
<th class="text-center">Centro costo</th>
<th class="text-center">Creaci&oacute;n</th>
<th class="text-center" class="text-center" colspan="2">Acciones</th>

</tr></thead>
<tbody>
@foreach($empleados as $empleado)
<tr data-id="{{$empleado->id}}"><td>{{$empleado->id}}</td>
<td class="text-center">{{$empleado->cedula}}</td>
<td class="text-center">{{$empleado->nombre}}</td>
<td class="text-center">{{$empleado->telefono}}</td>
<td class="text-center">{{$empleado->celular}}</td>
<td class="text-center">{{$empleado->email}}</td>
<td class="text-center">{{$empleado->Ccosto->nombre}}</td>
<td class="text-center">{{$empleado->created_at}}</td>
<td>
 
   

    	<a href="{{route('editar_tercero', ['id' => $empleado->id])}}" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-edit"></span>
					 
				</a>
     
    
<td>



    	<a href="{{route('borrar_tercero', ['id' => $empleado->id])}}" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-remove"></span>
				
				</a></td>
</tr>
@endforeach

</tbody>
</table>





@endsection
