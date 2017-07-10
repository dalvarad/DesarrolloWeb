@extends('admin.template.main')

@section('title','Crear Reserva')

@section('contenido')

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	<p>falta arreglar vista y controlador</p>
	{!! Form::label('id_us', 'ID_US (Rut Usuario->no aun)') !!}
	{!! Form::number('id_us', null, ['class' => 'form-control', 'required']) !!}

	<p></p>
	{!! Form::label('id_ha', 'ID Habitación') !!}
	{!! Form::number('id_ha', null, ['class' => 'form-control', 'required']) !!}

	<p></p>
	{!! Form::label('reserva_comienza', 'Fecha Inicio') !!}
	{!! Form::date('reserva_comienza', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	{!! Form::label('reserva_termina', 'Fecha Termina') !!}
	{!! Form::date('reserva_termina', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Registrar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	