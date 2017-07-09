@extends('welcome')

@section('title', 'Editar usuario ' . $users->name)

@section('contenido')

	{!! Form::open(['route' => ['admin.users.update', $users], 'method' => 'PUT']) !!}


 		{!! Form::label('name', 'Nombre de Usuario') !!}
		{!! Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}

		<p></p>
		{!! Form::label('rut', 'Rut Usuario') !!}
		{!! Form::text('rut', $users->rut, ['class' => 'form-control', 'placeholder' => '11.111.111-1', 'required']) !!}

		<p></p>
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', $users->email, ['class' => 'form-control', 'placeholder' => 'correo@correo.com', 'required']) !!}

		<p></p>
		{!! Form::label('type', 'Tipo de Usuario') !!}
		{!! Form::select('type', ['' => 'Seleccione un nivel', 'administrador' => 'Administrador', 'recepcionista' => 'Recepcionista', 'cliente' => 'Cliente'], $users->type, ['class' => 'form-control',  'required']) !!}

		<p></p>

		<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection