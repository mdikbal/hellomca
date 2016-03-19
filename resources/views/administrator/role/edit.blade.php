

@extends('administrator.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
						
					</div>
					<h2 class="panel-title">Edit A Role 
						
						@include('administrator.block.back')				

						
					</h2>


				</header>
				<div class="panel-body">
					@include('administrator.alart')

					@if(Route::getCurrentRoute()->getName() == 'permission.edit')	
						{!! Form::open(array('url' => URL::route('permission.update',$data['roles']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
					@else
						{!! Form::open(array('url' => 'permission','class'=>'form-horizontal form-bordered')) !!}
					@endif

								
			
					@include('administrator.role.formdetails')
									

				</div>
			</section>
		</div>
	</div>


					@include('administrator.role.form')


					{!! Form::close()!!}
@stop

@section('customjs')
<script>
	$(document).ready(function(){
		$(".checkall").click(function(){
			 $('input:checkbox').prop('checked',true);
			
		});				
		$(".uncheck").click(function(){
			 $('input:checkbox').prop('checked',false);
			
		});		

});


</script>

@stop