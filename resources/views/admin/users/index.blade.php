@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
		<!--Buscador de tipo de habitaciones-->
		{!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right', 'name' => 'search-form']) !!}
			<h5>Busque su tipo de usuario: </h5>
			<div class="input-group">
				{!! Form::select('type', ['administrador' => 'Administrador', 'recepcionista' => 'Recepcionista', 'cliente' => 'Cliente'], null,['class' => 'form-control', 'placeholder' => 'Buscar usuario' ,'required', 'aria-describedby' => 'search']) !!}
				<span class="input-group-btn" id="search" ><button class="btn btn-default" type="button" type="submit" onclick="document.forms['search-form'].submit();"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				
			</div>
		{!! Form::close() !!}
	<!--Fin de tipo de habitaciones-->
	<p></p>
	</div>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "administrador")
							<span class="label label-danger">{{ $user->type }}</span>
						@elseif($user->type == "cliente")
							<span class="label label-info">{{ $user->type }}</span>
						@else
							<span class="label label-primary">{{ $user->type }}</span>
						@endif	
					</td>
					<td>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Está seguro de eliminar al usuario seleccionado?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">
			{!! $users->render() !!}
	</div>
@endsection