<div class="form-group">
	{!! Form::label('titulo', 'Titulo') !!}
	{!! Form::text('titulo',null,['class'=>'form-control'])!!}
</div>
	<div class="form-group">
     	{!! Form::label('detalle', 'Detalle') !!}
		{!! Form::text('detalle',null,['class'=>'form-control','id'=>'ckeditor'])!!}
		<script>
            CKEDITOR.replace( 'ckeditor' );
        </script>
	</div>
<div class="form-group">
	{!! Form::label('categorias_id', 'Tipo de Noticia') !!}
	<select name="categorias_id" id="categorias_id" class="form-control">
		@foreach($categorias as $categoria)
			<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
		@endforeach
	</select>
	
</div>
<div class="form-group">
	    {!! Form::label('foto', 'Foto') !!}
	    {!! Form::file('foto') !!}
    <p class="help-block">Seleccione una foto</p>
</div>
