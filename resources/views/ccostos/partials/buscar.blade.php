<div class="panel panel-default">
	<div class="panel-body">

		<div class="col-sm-8">
			{!!Form::open(['route' => 'buscar_costo', 'role' => 'form', 'method' => 'GET'])!!}

				<div class="input-group">
                     
					<div class="input-group-addon">
						<input type="radio" name="campo" value="nit" /> NIT
					</div >

					<div class="input-group-addon">
						<input type="radio" name="campo" value="nombre" checked /> Nombre
					</div>

					{!!Form::text('buscar', null, ['placeholder' => 'Buscar', 'class' => 'form-control', 'autofocus'])!!}
                  <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
					<div class="input-group-btn">
						{!!Form::submit('Buscar', ['class' => 'btn btn-success btn-sm'])!!}
					</div>

				</div> {{-- /.input-groupda --}}

			{!!Form::close()!!}

		</div> {{-- /.col-sm-8 --}}

		<div class="col-sm-3 col-sm-offset-1 text-right">
			<a href="{{route('crear_costo')}}" class="btn btn-success btn-sm">
				<span class="glyphicon glyphicon-plus"></span>
				Crear 
			</a>
		</div>

	</div> {{-- /.panel-body --}}
</div> {{-- /.panel --}}