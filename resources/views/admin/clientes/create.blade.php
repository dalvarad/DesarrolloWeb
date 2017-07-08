@extends('admin.template.main')

@section('title', 'Crear Cliente')

@section('contenido')

	{!! Form::open(['route' => 'admin.clientes.store', 'method' => 'POST']) !!}
	
	{!! Form::label('nombre_cliente', 'Nombre del Cliente') !!}
	{!! Form::text('nombre_cliente', null, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}
	
	<p></p>
	{!! Form::label('rut_cliente', 'Rut del Cliente') !!}
	{!! Form::text('rut_cliente', null, ['class' => 'form-control', 'placeholder' => '1.111.111-1', 'required']) !!}

	<p></p>
	{!! Form::label('direccion', 'Direccion del Cliente') !!}
	{!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'San Martín #123, Concepción', 'required']) !!}

	<p></p>
	{!! Form::label('telefono', 'telefono') !!}
	{!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => '88888888', 'required']) !!}

	<p></p>
	{!! Form::label('usuario', 'Nickname') !!}
	{!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'rolo123', 'required']) !!}

	<p></p>
	{!! Form::label('pass', 'Contraseña Cliente') !!}
	{!! Form::password('pass', ['class' => 'form-control', 'placeholder' => '******', 'required']) !!}

    <p></p>
	{!! Form::label('pass', 'Confirmar Contraseña') !!}
	{!! Form::password('pass',['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
 
	<p></p>
	<div align="center">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}



@endsection