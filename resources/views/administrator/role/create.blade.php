@extends('administrator.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
						
					</div>
					<h2 class="panel-title">Create New Role 
						
						@include('administrator.block.createButton')		

						
					</h2>


				</header>
				<div class="panel-body">
					@include('administrator.alart')

						{!! Form::open(array('url' => 'permission','class'=>'form-horizontal form-bordered')) !!}
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