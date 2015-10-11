@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Noticias, Total :{!! $noticias->total() !!}</div>
				<div class="panel-body">

				{!! $noticias->render() !!}
		
				{!! Form::open(['url'=>'/admin/noticias','method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) !!}
				    <div class="form-group">
				        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la Noticia'])!!}
				    </div>
				    <button type="submit" class="btn btn-default">Buscar</button>
				{!! Form::close() !!}
					<table class="table table-hover">
						<thead>
							<th>Titulo</th>
							<th>Detalle</th>
							<th>Foto</th>
							<th>Opcion</th>
						</thead>
						@foreach($noticias as $noticia)
						<tbody data-id="{{ $noticia->id }}">
							<td>{{ $noticia->titulo }}</td>
							<td>{{ $noticia->detalle }}</td>
							<td><a href="{{ url('/admin/foto',$noticia->id) }}"  title="Ver Imagen"><span class="glyphicon glyphicon-picture glyphicon-align-right"></a></span></td>
							<td><a href="#" class="btn btn-danger btn-sm btn-eliminar_noticias" role="button">Eliminar</a></td>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
			<ul class="pager">
				{!! $noticias->render() !!}
			</ul>
		</div>
	</div>
	{!! Form::open(['url' => ['/admin/eliminarnoticia','noticias_id'], 'method' => 'DELETE','id'=>'form-eliminar']) !!}
	
	{!! Form::close() !!}
</div>
@endsection

@section('script')
<script>
	$(document).ready(function(){
    	$('.btn-eliminar_noticias').click(function(e){

    		e.preventDefault();

    		var row = $(this).parents('tbody');
    		var id = row.data('id');
    		var form = $('#form-eliminar');
    		var url = form.attr('action').replace('noticias_id',id);
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
							text: 'Operacion Exitosa..',   
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
