@extends('layout.nav2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Noticia</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						Corriga los siguientes errores..<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					{!! Form::model($noticia,['url' => ['/noticias/actualizar',$noticia->id], 'method' => 'PUT','enctype'=>'multipart/form-data','files' => true ]) !!}
                     	@include('noticia.partials.form')
                     	<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a href="{{ url('/noticias/editar',Auth::user()->id) }}" class="btn btn-danger" role="button">Cancelar</a>
							{!! Form::submit('Actualizar Noticia',['class' => 'btn btn-primary','id'=>'botom']); !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){
	$('.pass').hide();
	$('.pas').hide();
	$('#botom').prop('disabled', true);

	document.getElementById("pass1").addEventListener("keyup", myFunction);

	document.getElementById("pass2").addEventListener("keyup", myFunction);

	function myFunction() {
    	var pas1 = document.getElementById("pass1");
    	var pas2 = document.getElementById("pass2");
    	if (pas1.value!= "" && pas2.value !="") {
    		if (pas1.value == pas2.value){
	    		$('.pas').show();
				$('#pass1').css('background-color','rgba(51, 226, 32, 0.38)'); 
				$('#pass2').css('background-color','rgba(51, 226, 32, 0.38)'); 
				$('.pass').hide();
				$('#botom').prop('disabled', false);
	    	}else{
	    		$('.pass').show();
	    		$('.pas').hide();
	    		$('#pass1').css('background-color','rgba(224, 8, 8, 0.26)'); 
				$('#pass2').css('background-color','rgba(224, 8, 8, 0.26)'); 
				$('#botom').prop('disabled', true);
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