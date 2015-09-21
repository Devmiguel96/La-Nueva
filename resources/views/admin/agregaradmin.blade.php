@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Agregar Administrador</div>
				<div class="panel-body">
				@if (count($errors) > 0)
						<div id="error" class="alert alert-danger">
						Corriga los siguientes errores..<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
						{!! Form::open(['url' => ('admin/guardaradmin'), 'method' => 'POST']) !!}
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
								{!! Form::label('password', 'Contraseña') !!}<img class="bien1" src="{{ asset('img/bien.png') }}" title="Contraseña Correcta" alt=""><img class="mal1" src="{{ asset('img/mal.png') }}" alt="">
								{!! Form::password('password',['class'=>'form-control','id'=>'pass1'])!!}
							</div>
							<div class="form-group">
								{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}<img class="bien2" src="{{ asset('img/bien.png') }}" alt="" title="Contraseña Correcta" ><img class="mal2" src="{{ asset('img/mal.png') }}" alt="">
								{!! Form::password('password_confirmation',['class'=>'form-control','id'=>'pass2'])!!}
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{!! Form::submit('REGISTRAR',['class' => 'btn btn-warning','id'=>'botom']) !!}
								</div>
							</div>
						{!! Form::close() !!}	
				</div>
			</div>
			
		</div>
	</div>
	<style>
		#footer{
			margin-top: 10px;
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
	$('#botom').prop('disabled', true);

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
    	}else{
    		$('.mal1').hide();
    		$('#pass1').css('background-color','rgba(51, 226, 32, 0.38)');
    		$('.bien1').show(); 
    	}
    }
    if (pas1.value!= "" && pas2.value !="") {
	    	
	    		
	    		if (pas1.value == pas2.value ){
	    			if (pas1.value.length > 8 && pas2.value.length > 8) {
	    				$('.bien1').show();
				    	$('.bien2').show();
						$('#pass1').css('background-color','rgba(51, 226, 32, 0.38)'); 
						$('#pass2').css('background-color','rgba(51, 226, 32, 0.38)'); 
						$('#enviar').prop('disabled', false);
				    	$('.mal2').hide();
				    	$('.mal1').hide();
	    			}else{
	    				$('.mal1').show().prop('title', 'tener mas de 8 Caracteres');
				    	$('.mal2').show().prop('title', 'tener mas de 8 Caracteres');;
				    	$('#enviar').prop('disabled', true);
				    	$('.bien1').hide();
				    	$('.bien2').hide();
				    	$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
						$('#pass2').css('background-color','rgba(224, 8, 8, 0.26)'); 
	    			}
			    	
		    	}else{
			    	$('.mal1').show().prop('title', 'Contraseña no Coinciden');
			    	$('.mal2').show().prop('title', 'Contraseña no Coinciden');;
			    	$('#enviar').prop('disabled', true);
			    	$('.bien1').hide();
			    	$('.bien2').hide();
			    	$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
					$('#pass2').css('background-color','rgba(224, 8, 8, 0.26)'); 
				
			    }
	    	
	    }else{
	    	$('.pass').hide();
			$('.pas').hide();
			$('#enviar').prop('disabled', true);

	    }
	}
});
</script>
@endsection

