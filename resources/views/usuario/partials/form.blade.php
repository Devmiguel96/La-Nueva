<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('apellido', 'Apellido') !!}
	{!! Form::text('apellido',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password',['class'=>'form-control'])!!}
</div>