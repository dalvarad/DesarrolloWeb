@extends('admin.template.main')

@section('title', 'Crear Habitación')

@section('contenido')

	{!! Form::open(['route' => 'admin.habitaciones.store', 'method' => 'POST']) !!}

		<p></p>
		{!! Form::label('valor', 'Valor Habitación') !!}
		{!! Form::number('valor', null, ['class' => 'form-control', 'placeholder' => '35.000', 'required']) !!}

		<p></p>
		{!! Form::label('estado', 'Estado Habitación') !!}
		{!! Form::select('estado', ['' => 'Estado', 'ocupada' => 'Ocupada', 'desocupada' => 'Desocupada'], null, ['class' => 'form-control',  'required']) !!}

		<p></p>
		{!! Form::label('tipo_de_habitacion', 'Tipo de Habitación') !!}
		{!! Form::select('tipo_de_habitacion', ['single' => 'Single', 'matrimonial' => 'Matrimonial', 'double' => 'Double'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...' ,'required']) !!}

		<p></p>
		<div align="center">
			{!! Form::submit('Registrar Habitación', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
