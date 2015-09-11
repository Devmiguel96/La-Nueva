@extends('nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Noticias</div>
				<div class="panel-body">
					<p> <strong>N° de Noticias: </strong>{{ $cant }}</p>
					<table class="table table-hover">
						<thead>
							<th>Titulo</th>
							<th>Detalle</th>
							<th>Foto</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
						@foreach($noticias as $noticia)
						<tbody data-id="{{ $noticia->id }}">
							<td>{{ $noticia->titulo }}</td>
							<td>{{ $noticia->detalle }}</td>
							<td><a href="{{ url('/noticias/foto',$noticia->id) }}"  title="Ver Imagen"><span class="glyphicon glyphicon-picture glyphicon-align-right"></a></span></td>
							<td><a class="btn btn-primary btn-sm" href=" {{ url('/noticias/ver',$noticia->id) }}" role="button">Editar</a></td>
							<td><a href="#" class="btn btn-danger btn-sm btn-eliminar"  role="button">Eliminar</a></td>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	{!! Form::open(['url' => ['/noticias/eliminar','noticia_id'], 'method' => 'DELETE','id'=>'form-eliminar']) !!}
	{!! Form::close() !!}</td>
</div>
@endsection

@section('script')
<script>
	$(document).ready(function(){
    	$('.btn-eliminar').click(function(e){

    		e.preventDefault();

    		var row = $(this).parents('tbody');
		    var id = row.data('id');
		    var form = $('#form-eliminar');
		    var url = form.attr('action').replace('noticia_id',id);
		    var data = form.serialize();


    		swal({   
				title: 'Confirmar',   
				text: 'Desea Eliminar la Noticia?',  type: 'warning',   
				showCancelButton: true,   
				confirmButtonColor: '#DD6B55',   
				confirmButtonText: 'Eliminar',   
				cancelButtonText: 'Cancelar',   
				closeOnConfirm: false}, 
				function(){
					$.post(url, data, function(result){
						swal({   
							title: result,   
							text: 'Operacion Exitosa',   
							timer: 2000,   
							type: 'success',
							showConfirmButton: false 
						});
		    			row.fadeOut(2000);
		    		});
			});

    		

    	});
	});
</script>
@endsection