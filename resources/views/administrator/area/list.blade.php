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
	
					<h2 class="panel-title">Area List 
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
										<th>Area Name</th>
										<th>Clients Number</th>
										<th>Created By</th>
										<th>Created Date</th>
										<th>Actions</th>
									</tr>
								</thead>
										
								<tbody>
									@foreach ($data['areas'] as $area)
										<tr>
											<td>{{ $area['area_code'] }}</td>
											<td>{{ $area['area_name'] }}</td>
											<td>{{ $area['clients_num'] }}</td>
											<td>{{ $area['username'] }}</td>
											<td>{{ $area['created_at'] }}</td>
											<td class="actions">
												<a href="{!! URL::route('areas.edit',$area['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('areas.show',$area['id'])!!}" id="{{ $area['id'] }}" class="info-btn"><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $area['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('areas.destroy',$area['id']),'method'=>'DELETE','style'=>'display:inline' )) !!}
									                {!! Form::hidden('id', $area['id']) !!}
													<button id="del_{{ $area['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
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