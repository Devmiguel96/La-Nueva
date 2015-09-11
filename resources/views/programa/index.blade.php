@extends('nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Programas <a class="btn btn-default" href="{{ route('programas.create')}}"><span class="glyphicon glyphicon-plus"></span> Agregar</a></div>

				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<th>Programa</th>
							<th>Horario</th>
							<th>Comienza</th>
							<th>Termina</th>
							<th>Dirige</th>
							<th>Eliminar</th>
							<th>Editar</th>
						</thead>
						@foreach($programas as $programa)
						<tbody data-id="{{ $programa->id }}">
							<td>{{ $programa->nombre }}</td>
							<td>{{ $programa->horario }}</td>
							<td>{{ $programa->comienza }}</td>
							<td>{{ $programa->termina }}</td>
							<td>{{ $programa->dirige }}</td>
							<td><a href="#" class="btn btn-danger btn-sm btn-eliminar_noticias" role="button">Eliminar</a></td>
							<td><a class="btn btn-primary btn-sm" href=" {{ route('programas.edit',$programa->id) }}" role="button">Editar</a></td>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	{!! Form::open(['route' => ['programas.destroy','program_id'], 'method' => 'DELETE','id'=>'form-eliminar']) !!}
	
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
    		var url = form.attr('action').replace('program_id',id);
    		var data = form.serialize();

			swal({   
				title: 'Confirmar',   
				text: 'Desea Eliminar el Programa?',  type: 'warning',   
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
