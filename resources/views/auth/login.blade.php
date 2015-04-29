@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio de sessi&oacute;n</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Atenci&oacute;n!--</strong> <strong>ingrese datos requeridos.</strong><br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                    {!!Form::open(['url'=>'auth/login', 'role'=>'form','class'=>'form-horizontal'])!!}
				
				
						<div class="form-group">
							
                            {!!Form::label('Correo electr&oacute;nico','Correo electr&oacute;nico',['class'=>'col-md-4 control-label'])!!}
                           
							<div class="col-md-6">
								
                                {!!Form::email('email',old('email'),['class'=>'form-control'])!!}
                                
                                
							</div>
						</div>

						<div class="form-group">
						  {!!Form::label('Contrase&ntilde;a','Contrase&ntilde;a',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-6">
								  {!!Form::password('password',['class'=>'form-control'])!!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
                                   
										<input type="checkbox" name="remember"> Recordar
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
						
                            	<button type="submit" class="btn btn-primary">Ingresar</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Perdi&oacute; su contrase&atilde;a?</a>
							</div>
						</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
