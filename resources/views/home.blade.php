@extends('head')

@endif
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Imagen</div>
				<div class="panel-body">
					<img src="{{asset('storage/')}}/{{$noticia->foto}}" class="img-thumbnail">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
