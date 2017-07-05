@extends('welcome')

@section('title', 'Crear Usuario')

@section('contenido')

	{!! Form::open(['route' => 'admin.usuarios.store', 'method' => 'POST']) !!}


 		{!! Form::label('nombre_usuario', 'Nombre de Usuario') !!}
		{!! Form::text('nombre_usuario', null, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}

		{!! Form::label('rut_usuario', 'Rut Usuario') !!}
		{!! Form::text('rut_usuario', null, ['class' => 'form-control', 'placeholder' => '1.111.111-1', 'required']) !!}

		{!! Form::label('usuario', 'Nick Usuario') !!}
		{!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'Rarami', 'required']) !!}

		{!! Form::label('pass', 'Contraseña Usuario') !!}
		{!! Form::password('pass',['class' => 'form-control', 'placeholder' => '********', 'required']) !!}


		{!! Form::label('tipo', 'Tipo de Usuario') !!}
		{!! Form::select('tipo', ['' => 'Seleccione un nivel', 'administrador', 'recepcionista'], null, ['class' => 'form-control',  'required']) !!}

		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@endsection