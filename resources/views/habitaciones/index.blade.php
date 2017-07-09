@extends('welcome')
@section('title', 'Nuestras Habitaciones')
@section('contenido')

	<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<th>Valor</th>
			<th>Tipo de Habitación</th>
		</thead>
		<tbody>
			@foreach($habitaciones as $habitacion)
				<tr>
					<td>{{ $habitacion->valor }}</td>
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
				</tr>
			@endforeach
		</tbody>
	</table>
	</div> 
	<div align="center">
		{!! $habitaciones->render() !!}
	</div>

@endsection