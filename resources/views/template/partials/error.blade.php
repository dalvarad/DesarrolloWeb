
<!--
	- Muestro advertencias para cuando ingresan mal los formularios
	- Obtiene las reglas de App\Http\Requests\UsuarioRequest.php
 -->
@if(count($errors)>0)
	<div class="alert alert-danger fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>
		<ul>
			@foreach($errors->all() as $error)
				<li>
					{{ $error }}
				</li>
			@endforeach	
		</ul>
	</div>	
@endif