<div class="col-sm-6">

<div class="form-group">
{!!Form::label('Codigo')!!}
{!!Form::text('codigo',null,['class'=>'form-control floating-label','placeholder'=>'Codigo:','required'])!!}
@if($errors->has('nit'))
<p class="text-danger">{{$errors->first('nit')}}</p>
@endif
</div>
<div class="form-group">
{!!Form::label('Nombre')!!}
{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder'=>'Nombre:','required'])!!}
@if($errors->has('nombre'))
<p class="text-danger">{{$errors->first('nombre')}}</p>
@endif
</div>
<div class="form-group">
                           <label class="control-label">Area</label>
                           
                           <select name="area_id" id="area_id" class="form-control" required>
                             
                              <option>Seleccione una area</option>
                              @foreach($areas as $area)
                     <option value="{{$area->id}}">{{$area->area}}</option>
                          @endforeach
                           </select>
                           <div class="mens-estate"></div>
                       </div>

<div class="form-group">
                           <label class="control-label">Departamento</label>
                           
                           <select name="departamento" id="departamento" class="form-control" required>
                             
                              <option>Seleccione departamento</option>
                              @foreach($departamentos as $departamento)
                     <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                          @endforeach
                           </select>
                           <div class="mens-estate"></div>
                       </div>

                       <div class="form-group">
                           <label class="control-label">Ciudad:</label>
                           <select name="ciudad" id="ciudad" class="form-control">
                               <option>Primero selecciona departamento</option>
                           </select>
                           <div class="mens-cities"></div>
                       </div>

</div>



 