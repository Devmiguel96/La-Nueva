@extends('layout.nav2')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Top-10 de Usuarios con Mas Publicaciones</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<th class="info">#</th>
							<th class="info">Nombre</th>
							<th class="info">Apellido</th>
							<th class="info">Publicaciones</th>
						</thead>
						<?php $cant = 1 ?>
						@foreach($usuarios as $usuario)
						<tbody>
								<td>{{ $cant++ }}</td>
								<td>{{ $usuario->nombre }}</td>
								<td>{{ $usuario->apellido }}</td>
								<td>{{ $usuario->cantidad_noticias }}</td>
						</tbody>
						@endforeach
					</table>
				</div>			
			</div>
		</div>
	</div>
	<style>
		#footer{
			margin-top: 280px;
		}
	</style>
</div>


@endsection
