@extends('administrator.app')
@section('content')	
<!-- start: page -->	
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
						<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
					</div>
	
					<h2 class="panel-title">Role List 
						@include('administrator.block.listButton')
					</h2>
				</header>
				<div class="panel-body">
					@include('administrator.alart')					
					@if(!empty($data) && $data['status'] == 'success')

						<div class="table-responsive">
							<table class="table table-bordered mb-none">
								<thead>
									<tr class="dark">
										<th>#</th>
										<th>Role Name</th>
										<th>User Quantity</th>
										<th>Role Description</th>
										<th>Created By</th>
										<th>Created Date</th>
										<th>Actions</th>
									</tr>
								</thead>
																				
								<tbody>
									@foreach ($data['roles'] as $roles)
										<tr>
											<td>{{ $roles['id'] }}</td>
											<td>{{ $roles['role_name'] }}</td>
											<td>{{ $roles['users_qty'] }}</td>
											<td>{{ $roles['role_description'] }}</td>
											<td>{{ $roles['created_by'] }}</td>
											<td>{{ $roles['created_at'] }}</td>
											<td class="actions">
												<a href="{!! URL::route('permission.edit',$roles['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('permission.show',$roles['id'])!!}" id="{{ $roles['id'] }}" class="info-btn"><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $roles['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('permission.destroy',$roles['id']),'method'=>'DELETE','style'=>'display:inline' )) !!}
									                {!! Form::hidden('id', $roles['id']) !!}
													<button id="del_{{ $roles['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
									            {!! Form::close() !!}
																					
											</td>
										</tr>
									@endforeach

					
								</tbody>
							</table>
						</div>						
					@else
					@endif
				</div>
			</section>
		</div>
		
	</div>

	
<!-- end: page -->
@stop


@section('customjs')
<script type="text/javascript">	
	$(document).ready(function(){
		$( '.delete-btn' ).click(function() {	
			var id = $(this).attr('rel');
			var deleteBtn = '#del_'+id;			
			$(deleteBtn).click();
		});
	});	
</script>>

@stop