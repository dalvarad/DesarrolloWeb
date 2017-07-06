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
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id }}</td>
					<td>{{ $usuario->nombre_usuario }}</td>
					<td>{{ $usuario->usuario }}</td>
					<td>
						@if($usuario->tipo == "administrador")
							<span class="label label-danger">{{ $usuario->tipo }}</span>
						@else
							<span class="label label-primary">{{ $usuario->tipo }}</span>
						@endif	
					</td>
					<td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> <a href="{{ route('admin.usuarios.destroy', $usuario->id) }}" onclick="return confirm('¿Está seguro de eliminar al usuario seleccionado?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $usuarios->render() !!}

@endsection