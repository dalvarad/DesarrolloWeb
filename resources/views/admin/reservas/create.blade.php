@extends('admin.template.main')

@section('title','Crear Reserva')

@section('contenido')

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	{!! Form::label('id_us', 'Rut Usuario') !!}
	{!! Form::select('id_us', ['' => 'Estado', 'ocupada' => 'Ocupada', 'desocupada' => 'Desocupada'], null, ['class' => 'form-control', 'required']) !!}

	{!! Form::label('reserva_termina', 'Fecha Inicio') !!}
	{!! Form::date('reserva_termina', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	{!! Form::close() !!}

@endsection	