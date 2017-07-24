@extends('admin.template.main')

@section('title', 'Editar Habitación Nº' . $habitacion->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.habitaciones.update', $habitacion], 'method' => 'PUT']) !!}
	
	@if(Auth::User()->type == 'administrador')
		{!! Form::label('valor', 'Valor Habitación') !!}
		{!! Form::number('valor', $habitacion->valor, ['class' => 'form-control', 'placeholder' => '35.000', 'required']) !!}
	@endif
		<p></p>
		{!! Form::label('estado', 'Estado Habitación') !!}
		{!! Form::select('estado', ['' => 'Estado', 'ocupada' => 'Ocupada', 'desocupada' => 'Desocupada'], $habitacion->estado, ['class' => 'form-control',  'required']) !!}

		<p></p>
	@if(Auth::User()->type == 'administrador')
		{!! Form::label('tipo_de_habitacion', 'Tipo de Habitación') !!}
		{!! Form::select('tipo_de_habitacion', ['single' => 'Single', 'matrimonial' => 'Matrimonial', 'double' => 'Double'], $habitacion->tipo_de_habitacion, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...' , 'required']) !!}
	@endif
		<p></p>

		<div align="center">
			{!! Form::submit('Editar Habitación', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection

