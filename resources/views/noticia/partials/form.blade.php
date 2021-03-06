<div class="form-group">
	{!! Form::label('titulo', 'Titulo') !!}
	{!! Form::text('titulo',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
     {!! Form::label('detalle', 'Detalle') !!}
	{!! Form::textarea('detalle', null, ['class' => 'form-control','rows'=>'3','id'=>'ckeditor'])!!}
	<script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
</div>
<div class="form-group">
	{!! Form::label('categorias_id', 'Categoria') !!}
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
