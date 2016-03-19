<div class="row">
	<div class="col-md-12">	
			@if (session('msg'))

				<div class="alert alert-{{ session('type') }}">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					 {{ session('msg') }}
				</div>

			@endif
	</div>
	
</div>

