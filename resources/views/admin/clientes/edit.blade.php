@extends('admin.template.main')

@section('title', 'Editar cliente ' . $cliente->nombre_cliente)

@section('contenido')

	{!! Form::open(['route' => ['admin.clientes.update', $cliente], 'method' => 'PUT']) !!}
	
	{!! Form::label('nombre_cliente', 'Nombre del Cliente') !!}
	{!! Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}
	
	<p></p>
	{!! Form::label('direccion', 'Direccion del Cliente') !!}
	{!! Form::text('direccion', $cliente->direccion, ['class' => 'form-control', 'placeholder' => 'San Martín #123, Concepción', 'required']) !!}

	<p></p>
	{!! Form::label('telefono', 'telefono') !!}
	{!! Form::number('telefono', $cliente->telefono, ['class' => 'form-control', 'placeholder' => '88888888', 'required']) !!}

	<p></p>
	{!! Form::label('usuario', 'Nickname') !!}
	{!! Form::text('usuario', $cliente->usuario, ['class' => 'form-control', 'placeholder' => 'rolo123', 'required']) !!}
     
	<p></p>
	<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}

@endsection