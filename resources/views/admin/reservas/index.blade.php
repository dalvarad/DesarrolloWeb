@extends('admin.template.main')

@section('title', 'Lista de Reservas')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.reservas.create') }}" class="btn btn-info"> Registrar Reserva</a>
	</div>
	<p></p>

	<table class="table table-striped">
		<thead>
			<th>ID Reserva</th>
			<th>Rut Usuario</th>
			<th>ID Habitación</th>
			<th>Rut Cliente</th>
			<th>Reserva Comienza</th>
			<th>Reserva Termina</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($reservas as $reserva)
			<tr>
				<td>{{ $reserva->id }}</td>
				<td>{{ $reserva->id_us }}</td>
				<td>{{ $reserva->id_ha }}</td>
				<td>{{ $reserva->id_cl }}</td>
				<td>{{ $reserva->reserva_comienza }}</td>
				<td>{{ $reserva->reserva_termina }}</td>
				<td>
					<a href="{{ route('admin.reservas.edit', $reserva->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('admin.reservas.destroy', $reserva->id) }}" onclick="return confirm('¿Está seguro que desea eliminar la reserva?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">
		{!! $reservas->render() !!}
	</div>
@endsection