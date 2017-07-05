@extends('welcome')

@section('title', 'Lista de Usuarios')

@section('contenido')
	<a href="{{ route('admin.usuarios.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Nick</th>
			<th>Tipo</th>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id_usuario }}</td>
					<td>{{ $usuario->nombre_usuario }}</td>
					<td>{{ $usuario->usuario }}</td>
					<td>
						@if($usuario->tipo == "administrador")
							<span class="label label-danger">{{ $usuario->tipo }}</span>
						@else
							<span class="label label-primary">{{ $usuario->tipo }}</span>
						@endif	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $usuarios->render() !!}

@endsection