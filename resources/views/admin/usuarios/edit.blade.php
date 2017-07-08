@extends('welcome')

@section('title', 'Editar usuario ' . $usuarios->nombre_usuario)

@section('contenido')

	{!! Form::open(['route' => ['admin.usuarios.update', $usuarios], 'method' => 'PUT']) !!}


 		{!! Form::label('nombre_usuario', 'Nombre de Usuario') !!}
		{!! Form::text('nombre_usuario', $usuarios->nombre_usuario, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}

		<p></p>
		{!! Form::label('rut_usuario', 'Rut Usuario') !!}
		{!! Form::text('rut_usuario', $usuarios->rut_usuario, ['class' => 'form-control', 'placeholder' => '11.111.111-1', 'required']) !!}

		<p></p>
		{!! Form::label('usuario', 'Nick Usuario') !!}
		{!! Form::text('usuario', $usuarios->usuario, ['class' => 'form-control', 'placeholder' => 'Rarami', 'required']) !!}

		<p></p>
		{!! Form::label('tipo', 'Tipo de Usuario') !!}
		{!! Form::select('tipo', ['' => 'Seleccione un nivel', 'administrador' => 'Administrador', 'recepcionista' => 'Recepcionista'], $usuarios->tipo, ['class' => 'form-control',  'required']) !!}

		<p></p>

		<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection