@if(Session::has('message_success'))
	
	<div class="alert alert-success fade in">

			<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>

		{{ session('message_success') }}
	
	</div>		
		
@endif 	



@if(Session::has('message_warning'))
	
	<div class="alert alert-warning fade in">

			<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>

		{{ session('message_warning') }}
	
	</div>		
		
@endif 	



@if(Session::has('message_danger'))
	
	<div class="alert alert-danger fade in">

			<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>

		{{ session('message_danger') }}
	
	</div>		
		
@endif 	


@if(Session::has('message_info'))
	
	<div class="alert alert-info fade in">

			<button type="button" class="close" data-dismiss="alert" aria-hiden="true">&times;</button>

		{{ session('message_info') }}
	
	</div>		
		
@endif 	