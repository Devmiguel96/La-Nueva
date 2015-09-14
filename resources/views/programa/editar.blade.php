@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Programa</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						Corriga los Siguientes Errores<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						{!! Form::model($programas,['route' => ['programas.update',$programas->id], 'method' => 'PUT']) !!}
	                     	@include('programa.partials.form')
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								    <a href="{{ route('programas.index') }}" class="btn btn-danger">Cancelar</a>
									{!! Form::submit('Guardar',['class' => 'btn btn-warning']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
@section('script')
<script>
	$(document).ready(function(){
		$('#dias').hide();
		$("#ver").click(function(){
			if( $('#dias').is(":visible") ){
			    $('#dias').hide();
			    document.getElementById("primero").disabled=false;
			    document.getElementById("primero1").disabled=false;
			    document.getElementById("primero2").disabled=false;
			}else{
			    $("#dias").show(500);
			    document.getElementById("primero").disabled=true;
			    document.getElementById("primero1").disabled=true;
			    document.getElementById("primero2").disabled=true;
			}
        	
    	});
    });
</script>
@endsection