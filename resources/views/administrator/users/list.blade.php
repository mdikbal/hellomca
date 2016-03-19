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
	
					<h2 class="panel-title">Users List 
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
										<th>Name</th>
										<th>Email</th>
										<th>Role Name</th>
										<th>Created Date</th>
										<th>Updated Date</th>
										<th>Last Login</th>
										<th>Actions</th>
									</tr>
								</thead>
										
								<tbody>
									@foreach ($data['users'] as $user)
										<tr>
											<td>{{ $user['id'] }}</td>
											<td>{{ $user['name'] }}</td>
											<td>{{ $user['email'] }}</td>
											<td title="{{ $user['created_at'] }}">{{ $user['role_name'] }}</td>
											<td title="{{ $user['created_at'] }}">{{ $user['created_by'] }}</td>
											<td title="{{ $user['role_description'] }}">{{ $user['updated_by'] }}</td>
											<td>{{ $user['last_login'] }}</td>
											<td class="actions">
												<a href="{!! URL::route('areas.edit',$user['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('areas.show',$user['id'])!!}" id="{{ $user['id'] }}" class="info-btn"><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $user['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('areas.destroy',$user['id']),'method'=>'DELETE','style'=>'display:inline' )) !!}
									                {!! Form::hidden('id', $user['id']) !!}
													<button id="del_{{ $user['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
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