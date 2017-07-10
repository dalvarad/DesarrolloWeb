@extends('admin.template.main')

@section('title', 'Editar usuario ' . $users->name)

@section('contenido')

	{!! Form::open(['route' => ['admin.users.update', $users], 'method' => 'PUT']) !!}


 		{!! Form::label('name', 'Nombre de Usuario') !!}
		{!! Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}

		<p></p>
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', $users->email, ['class' => 'form-control', 'placeholder' => 'correo@correo.com', 'required']) !!}

		<p></p>
		{!! Form::label('type', 'Tipo de Usuario') !!}
		{!! Form::select('type', ['administrador' => 'Administrador', 'recepcionista' => 'Recepcionista', 'cliente' => 'Cliente'], $users->type, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...' ,  'required']) !!}

		<p></p>

		<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection