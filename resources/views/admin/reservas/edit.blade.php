@extends('welcome')

@section('title','Editar Reserva - ' . $reservas->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.reservas.update', $reservas], 'method' => 'PUT']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Valor Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], null, ['class' => 'form-control', 'required', 'placeholder' => 'Valor Habitación']) !!}

	<p></p>
	{!! Form::label('reserva_termina', 'Fecha Termina') !!}
	{!! Form::date('reserva_termina', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Editar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection