@extends('admin.template.main')

@section('title','Listado de Reservas')

@section('contenido')
	<div align="center">
		<a href="{{ route('admin.reservas.create') }}" class="btn btn-info"> Registrar Reserva</a>
	</div>
	<p></p>

	<table class="table table-stripped">
        <thead>
            <th>Numero de Reserva</th>
            <th>Cliente</th>
            <th>Habitación</th>
            <th>Valor</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->name}}</td>
                    <td>{{$reserva->id_ha}}</td>                  
                    <td>{{$reserva->valor}}</td>
                    <td>{{$reserva->reserva_comienza}}</td>
                    <td>{{$reserva->reserva_termina}}</td>
                    <td>
	                    <a href="{{ route('admin.reservas.edit', $reserva->id) }}" class="btn btn-warning">
	                        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
	                    <a href="{{ route('admin.reservas.destroy', $reserva->id) }}" onclick="return confirm('¿Está seguro que desea eliminar la reserva?')" class="btn btn-danger">
	                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
	            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection	