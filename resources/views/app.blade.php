<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>@section('title')Inventarios de equipos @show</title>
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
{!!Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css')!!}
{!!Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css')!!}


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
                	
                
                   	<ul class="nav navbar-nav">
            
					<li><a class="navbar-brand"  href="{{ url('/') }}">SISTEMA DE INVENTARIOS</a></li>
				</ul>
                	 


				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a  href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in" > </span> Iniciar</a></li>
						<li><a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-collapse-up" ></span> Registrar</a></li>
					@else
                       
                 
                    	<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list" > </span> Reportes</a>
                            <ul class="dropdown-menu" role="menu">
							
							</ul>
                         </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"> </span> Maestros</a>
                            <ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('areas/') }}"><span class="glyphicon glyphicon-minus" ></span> &Aacute;reas</a></li>
                                <li><a href="{{ url('ccostos/') }}"><span class="glyphicon glyphicon-minus" ></span> Centro costos</a></li>
                                <li><a href="{{ url('empleados/') }}"><span class="glyphicon glyphicon-minus" ></span> Empleados</a></li>
                                <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Equipamientos</a></li>
                                 <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Equipos</a></li>
                                <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Proveedores</a></li>
                                 <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Referencias equipos</a></li>
                                <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Servicios</a></li>
                                <li><a href="{{ url('terceros/') }}"><span class="glyphicon glyphicon-minus" ></span> Suministros</a></li>

                                
							</ul>
                         </li>
                  <li></li>
						<li class="dropdown">
                        
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" > </span> {{   Auth::user()->name }} <b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off" ></span> Cerrar sesi&oacute;n </a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<div class="container">



	@yield('content')
    	
</div>  


    {!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
 
	{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
    {!!Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js')!!}
    {!!Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js')!!}
    
<footer class="main">	<div  class="form-group col-xs-12"  id="bs-example-navbar-collapse-1"  style="background-color: #f0ad4e;">
	</center></div>	<div class="form-group col-xs-12" id="bs-example-navbar-collapse-1" ><ul class="text-center">
		<p>Laravel is a trademark of Taylor Otwell. Copyright &copy; Andr&eacute;s Alvarez.</p>
		<p class="less-significant"><a href="http://jackmcdade.com">Desarrollo de Andr&eacute;s Alvarez. Analistista y Consultor en sistmes informaticos.</a></p></ul>
	</footer>
</div>
</footer>
<script>
	$(document).ready(function(){
		$('#departamento').change(function(){
			$.get("{{ url('dropdown')}}",
			{ option: $(this).val() },
			function(data) {
				$('#ciudad').empty();
				$.each(data, function(key, element) {
					$('#ciudad').append("<option value='" + element + "'>" + element + "</option>");
				});
			});
		});
	});		
</script>
</body>
</html>
