@extends('welcome')

@section('title', 'Lista de Habitaciones')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.habitaciones.create') }}" class="btn btn-info">Registrar Habitación <span class="glyphicon glyphicon-bed"></span></a>
	</div>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Valor</th>
			<th>Estado</th>
			<th>Tipo de Habitación</th>
		</thead>
		<tbody>
			@foreach($habitaciones as $habitacion)
				<tr>
					<td>{{ $habitacion->id }}</td>
					<td>{{ $habitacion->valor }}</td>
					<td>
						@if($habitacion->estado == "ocupada")
							<span class="label label-danger">{{ $habitacion->estado }}</span>
						@else
							<span class="label label-success">{{ $habitacion->estado }}</span>
						@endif

					</td>
					<td>
						@if($habitacion->tipo_de_habitacion == "single")
							<span class="label label-success">{{ $habitacion->tipo_de_habitacion }}</span>
						@else
							@if($habitacion->tipo_de_habitacion == "double")
								<span class="label label-primary">{{ $habitacion->tipo_de_habitacion }}</span>
							@else
								<span class="label label-info	">{{ $habitacion->tipo_de_habitacion }}</span>
							@endif
						@endif	
					</td>
					<td><a href="{{ route('admin.habitaciones.edit', $habitacion->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> <a href="{{ route('admin.habitaciones.destroy', $habitacion->id) }}" onclick="return confirm('¿Está seguro de eliminar la Habitación seleccionada?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">
		{!! $habitaciones->render() !!}
	</div>
@endsection