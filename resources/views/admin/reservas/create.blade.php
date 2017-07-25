@extends('admin.template.main')

@section('title','Crear Reserva')

@section('contenido')

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	{!! Form::label('id_us', 'RUT Usuario') !!}
	@if(Auth::User()->type == 'cliente')


{{--
	falta arreglar este
	que solo muestre el rut del cliente
--}}

		{!! Form::select('id_us', [$lista_users], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecione RUT']) !!}	
	@else
		{!! Form::select('id_us', [$lista_users], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecione RUT']) !!}	
	@endif


	<p></p>
	{!! Form::label('id_ha', 'Valor Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], null, ['class' => 'form-control', 'required', 'placeholder' => 'Valor Habitación']) !!}

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