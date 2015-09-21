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
	{!! Form::label('password', 'Contraseña') !!}<img class="bien1" src="{{ asset('img/bien.png') }}" alt=""><img class="mal1" src="{{ asset('img/mal.png') }}" alt="">
	{!! Form::password('password',['class'=>'form-control','id'=>'pass1'])!!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}<img class="bien2" src="{{ asset('img/bien.png') }}" alt=""><img class="mal2" src="{{ asset('img/mal.png') }}" alt="">
	{!! Form::password('password_confirmation',['class'=>'form-control','id'=>'pass2'])!!}
</div>