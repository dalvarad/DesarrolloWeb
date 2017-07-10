@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('contenido')

	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}


 		{!! Form::label('name', 'Nombre de Usuario') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}

		<p></p>
		{!! Form::label('rut', 'Rut Usuario') !!}
		{!! Form::text('rut', null, ['class' => 'form-control', 'placeholder' => '11.111.111-1', 'required']) !!}

		<p></p>
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'correo@correo.com', 'required']) !!}

		<p></p>
		{!! Form::label('password_confirmation', 'Contraseña Usuario') !!}
		{!! Form::password('password_confirmation',['class' => 'form-control', 'placeholder' => '********', 'required']) !!}

		<p></p>
		{!! Form::label('password', 'Confirmar Contraseña') !!}
		{!! Form::password('password',['class' => 'form-control', 'placeholder' => '********', 'required']) !!}

		<p></p>
		{!! Form::label('type', 'Tipo de Usuario') !!}
		{!! Form::select('type', ['administrador' => 'Administrador', 'recepcionista' => 'Recepcionista', 'cliente' => 'Cliente'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...', 'required']) !!}

		<p></p>

		<div align="center">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection