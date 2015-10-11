<div class="form-group">
	{!! Form::label('nombre', 'Nombre del Programa') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('horario', 'Horario ') !!}
	<div class="checkbox" >
		<div id="normal">
			<label class="checkbox-inline">
			  	<input type="checkbox" id="primero"  name="horario[]" value="Lunes a Viernes"> Lunes a Viernes
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="primero1"  name="horario[]" value="Toda la Semana"> Toda la Semana
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="primero2"  name="horario[]" value="Festivos"> Festivos
			</label>
			<label class="checkbox-inline">
			  	<div id="ver" class="text-muted" ><span class="glyphicon glyphicon-ok"></span> Seleccionar por Dias</div>
			</label>
		</div>
		<p></p>
		<div id="dias" >
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Lunes"> Lunes
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Martes"> Martes
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Miercoles"> Miercoles
			</label>
			<label class="checkbox-inline">
			 	<input type="checkbox" id="horario[]" name="horario[]" value="Jueves"> Jueves
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Viernes"> Viernes
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Sabados"> Sabados
			</label>
			<label class="checkbox-inline">
			  	<input type="checkbox" id="horario[]" name="horario[]" value="Domingos"> Domingos
			</label>
		</div>
	</div>
<div class="form-group">
	{!! Form::label('comienza', 'Hora:Comienza') !!}
	<select name="comienza" id="comienza" class="form-control">
		<option value="5:00 AM">5:00 AM</option>
		<option value="5:30 AM">5:30 AM</option>
		<option value="6:00 AM">6:00 AM</option>
		<option value="6:30 AM">6:30 AM</option>
		<option value="7:00 AM">7:00 AM</option>
		<option value="7:30 AM">7:30 AM</option>
		<option value="8:00 AM">8:00 AM</option>
		<option value="8:30 AM">8:30 AM</option>
		<option value="9:00 AM">9:00 AM</option>
		<option value="9:30 AM">9:30 AM</option>
		<option value="10:00 AM">10:00 AM</option>
		<option value="10:30 AM">10:30 AM</option>
		<option value="11:00 AM">11:00 AM</option>
		<option value="11:30 AM">11:30 AM</option>
		<option value="12:00 PM">12:00 PM</option>
		<option value="12:30 PM">12:30 PM</option>
		<option value="1:00 PM">1:00 PM</option>
		<option value="1:30 PM">1:30 PM</option>
		<option value="2:00 PM">2:00 PM</option>
		<option value="2:30 PM">2:30 PM</option>
		<option value="3:00 PM">3:00 PM</option>
		<option value="3:30 PM">3:30 PM</option>
		<option value="4:00 PM">4:00 PM</option>
		<option value="4:30 PM">4:30 PM</option>
		<option value="5:00 PM">5:00 PM</option>
		<option value="5:00 PM">5:30 PM</option>
		<option value="6:00 PM">6:00 PM</option>
		<option value="6:30 PM">6:30 PM</option>
		<option value="7:00 PM">7:00 PM</option>
		<option value="7:30 PM">7:30 PM</option>
		<option value="8:00 PM">8:00 PM</option>
		<option value="8:30 PM">8:30 PM</option>
		<option value="9:00 PM">9:00 PM</option>
		<option value="9:30 PM">9:30 PM</option>
		<option value="10:00 PM">10:00 PM</option>
		<option value="10:30 PM">10:30 PM</option>
	</select>
</div>
<div class="form-group">
	{!! Form::label('termina', 'Hora: Termina') !!}
	<select name="termina" id="termina" class="form-control">
		<option value="5:00 AM">5:00 AM</option>
		<option value="5:30 AM">5:30 AM</option>
		<option value="6:00 AM">6:00 AM</option>
		<option value="6:30 AM">6:30 AM</option>
		<option value="7:00 AM">7:00 AM</option>
		<option value="7:30 AM">7:30 AM</option>
		<option value="8:00 AM">8:00 AM</option>
		<option value="8:30 AM">8:30 AM</option>
		<option value="9:00 AM">9:00 AM</option>
		<option value="9:30 AM">9:30 AM</option>
		<option value="10:00 AM">10:00 AM</option>
		<option value="10:30 AM">10:30 AM</option>
		<option value="11:00 AM">11:00 AM</option>
		<option value="11:30 AM">11:30 AM</option>
		<option value="12:00 PM">12:00 PM</option>
		<option value="12:30 PM">12:30 PM</option>
		<option value="1:00 PM">1:00 PM</option>
		<option value="1:30 PM">1:30 PM</option>
		<option value="2:00 PM">2:00 PM</option>
		<option value="2:30 PM">2:30 PM</option>
		<option value="3:00 PM">3:00 PM</option>
		<option value="3:30 PM">3:30 PM</option>
		<option value="4:00 PM">4:00 PM</option>
		<option value="4:30 PM">4:30 PM</option>
		<option value="5:00 PM">5:00 PM</option>
		<option value="5:00 PM">5:30 PM</option>
		<option value="6:00 PM">6:00 PM</option>
		<option value="6:30 PM">6:30 PM</option>
		<option value="7:00 PM">7:00 PM</option>
		<option value="7:30 PM">7:30 PM</option>
		<option value="8:00 PM">8:00 PM</option>
		<option value="8:30 PM">8:30 PM</option>
		<option value="9:00 PM">9:00 PM</option>
		<option value="9:30 PM">9:30 PM</option>
		<option value="10:00 PM">10:00 PM</option>
		<option value="10:30 PM">10:30 PM</option>
	</select>
<div class="form-group">
	{!! Form::label('dirige', 'Dirigo por') !!}
	{!! Form::text('dirige',null, ['class' => 'form-control']) !!}
</div>