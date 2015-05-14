<div class="col-sm-6">

<div class="form-group">
{!!Form::label('Cedula')!!}
{!!Form::text('cedula',null,['class'=>'form-control','required'])!!}
@if($errors->has('cedula'))
<p class="text-danger">{{$errors->first('cedula')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('Nombre completo')!!}
{!!Form::text('nombre',null,['class'=>'form-control','required'])!!}
@if($errors->has('nombre'))
<p class="text-danger">{{$errors->first('nombre')}}</p>
@endif
</div>


<div class="form-group">
{!!Form::label('Tel&eacute;fono')!!}
{!!Form::text('telefono',null,['class'=>'form-control ','required'])!!}
@if($errors->has('telefono'))
<p class="text-danger">{{$errors->first('telefono')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('Celular')!!}
{!!Form::text('celular',null,['class'=>'form-control','required'])!!}
@if($errors->has('celular'))
<p class="text-danger">{{$errors->first('celular')}}</p>
@endif
</div>


<div class="form-group">
{!!Form::label('Email')!!}
{!!Form::text('email',null,['class'=>'form-control','required'])!!}
@if($errors->has('email'))
<p class="text-danger">{{$errors->first('email')}}</p>
@endif
</div>
<div class="form-group">
                           <label class="control-label">Centro de costos</label>
                           
                           <select name="ccosto_id" id="ccosto_id" class="form-control" required>
                             
                              <option>Seleccione</option>
                              @foreach($ccostos as $ccosto)
                     <option value="{{$ccosto->id}}">{{$ccosto->nombre}}</option>
                          @endforeach
                           </select>
                           <div class="mens-estate"></div>
                           @if($errors->has('ccosto_id'))
<p class="text-danger">{{$errors->first('ccosto_id')}}</p>
@endif
                       </div>

</div>