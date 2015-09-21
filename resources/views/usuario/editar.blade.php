@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Usuario <strong>{{ $usuario->nombre }} {{ $usuario->apellido }}</strong>	</div>
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
						{!! Form::model($usuario,['route' => ['usuarios.update',$usuario->id], 'method' => 'PUT']) !!}
	                     	@include('usuario.partials.form')
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								    <a href="{{ url('/noticias') }}" class="btn btn-danger">CANCELAR</a>
									{!! Form::submit('GUARDAR',['class' => 'btn btn-primary','id'=>'botom']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
						
				</div>
			</div>
		</div>
	</div>
	<style>
		#footer{
			margin-top: 50px;
		}
	</style>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){
	$('.mal2').hide();
	$('.mal1').hide();
	$('.bien1').hide();
	$('.bien2').hide();

document.getElementById("pass1").addEventListener("keyup", myFunction);

document.getElementById("pass2").addEventListener("keyup", myFunction);

function myFunction() {
    var pas1 = document.getElementById("pass1");
    var pas2 = document.getElementById("pass2");
    if (pas1.value != "") {
    	if (pas1.value.length < 8) {
    		$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
    		$('.mal1').show().prop('title', 'tener mas de 8 Caracteres');
    		$('.bien1').hide(); 
    		$('#botom').prop('disabled', true);
    	}else{
    		$('.mal1').hide();
    		$('#pass1').css('background-color','rgba(51, 226, 32, 0.38)');
    		$('.bien1').show(); 
    		$('#botom').prop('disabled', true);
    	}
    }
    if (pas1.value!= "" && pas2.value !="") {
	    	
	    		
	    		if (pas1.value == pas2.value ){
	    			if (pas1.value.length > 8 && pas2.value.length > 8) {
	    				$('.bien1').show();
				    	$('.bien2').show();
						$('#pass1').css('background-color','rgba(51, 226, 32, 0.38)'); 
						$('#pass2').css('background-color','rgba(51, 226, 32, 0.38)'); 
						$('#botom').prop('disabled', false);
				    	$('.mal2').hide();
				    	$('.mal1').hide();
	    			}else{
	    				$('.mal1').show().prop('title', 'tener mas de 8 Caracteres');
				    	$('.mal2').show().prop('title', 'tener mas de 8 Caracteres');;
				    	$('#botom').prop('disabled', true);
				    	$('.bien1').hide();
				    	$('.bien2').hide();
				    	$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
						$('#pass2').css('background-color','rgba(224, 8, 8, 0.26)'); 
	    			}
			    	
		    	}else{
			    	$('.mal1').show().prop('title', 'Contraseña no Coinciden');
			    	$('.mal2').show().prop('title', 'Contraseña no Coinciden');;
			    	$('#botom').prop('disabled', true);
			    	$('.bien1').hide();
			    	$('.bien2').hide();
			    	$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
					$('#pass2').css('background-color','rgba(224, 8, 8, 0.26)'); 
				
			    }
	    	
	    }else{
	    	$('.pass').hide();
			$('.pas').hide();
			$('#botom').prop('disabled', true);

	    }
	    
	}
});
</script>
@endsection