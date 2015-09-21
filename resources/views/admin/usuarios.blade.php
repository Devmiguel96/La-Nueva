@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Hay {!! $usuarios->total() !!} Usuarios Registrados</div>
				<div class="panel-body">
					<ul class="pagination">
						{!! $usuarios->render() !!}
					</ul>
					{!! Form::open(['url'=>'/admin/usuarios','method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) !!}
				    	<div class="form-group">
				        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario'])!!}
				    	</div>
				    	<button type="submit" class="btn btn-default">Buscar</button>
					{!! Form::close() !!}
					<table class="table table-bordered">
						<thead>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Eliminar</th>
							<th>Permisos</th>
						</thead>
						@foreach($usuarios as $usuario)
						<tbody data-id="{{ $usuario->id }}">
							<td>{{ $usuario->nombre }}</td>
							<td>{{ $usuario->apellido }}</td>
							<td>{{ $usuario->email }}</td>
							<td>{{ $usuario->roles_id }}</td>
							<td><?php 
									$iduser = $usuario->id;
									$id = Auth::user()->id;
									if ($id == $iduser) {
										echo '';
									}else{
										echo '<a href="#" class="btn btn-danger btn-sm btn-eliminar_usuario" role="button">Eliminar</a>';
									}
								?>
							</td>
							<td> 
								@if ($usuario->roles_id == '2')
									<a href="{{ url('/admin/volveradmin,$usuario->id') }}" class="btn btn-primary btn-sm" role="button">Dar Permisos</a>
								@endif
								
							</td>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
			<ul class="pager">
				{!! $usuarios->render() !!}
			</ul>
			
		</div>
		{!! Form::open(['url' => ['/admin/eliminarusuario','user_id'], 'method' => 'DELETE','id'=>'form-eliminar']) !!}
		{!! Form::close() !!}

	</div>
</div>
@endsection

@section('script')
<script>
	$(document).ready(function(){
    	$('.btn-eliminar_usuario').click(function(e){

    		e.preventDefault();

    		var row = $(this).parents('tbody');
		    var id = row.data('id');
		    var form = $('#form-eliminar');
		    var url = form.attr('action').replace('user_id',id);
		    var data = form.serialize();

    		swal({   
				title: 'Confirmar',   
				text: 'Desea Eliminar el Usuario?',  type: 'warning',   
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
