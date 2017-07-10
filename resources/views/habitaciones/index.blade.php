@extends('welcome')
@section('title', 'Nuestras Habitaciones')
@section('contenido')

	<div class="table-responsive">

	<!--Buscador de tipo de habitaciones-->
		{!! Form::open(['route' => 'habitaciones.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
			<h5>Busque su tipo de habitación: </h5>
			<div class="input-group">
				{!! Form::text('tipo_de_habitacion', null, ['class' => 'form-control', 'placeholder' => 'Buscar habitación' ,'required', 'aria-describedby' => 'search']) !!}
				<span class="input-group-btn" id="search" ><button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				
			</div>
			<hr>
		{!! Form::close() !!}
	<!--Fin de tipo de habitaciones-->
	
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