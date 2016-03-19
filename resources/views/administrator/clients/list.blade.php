@extends('administrator.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
						<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
					</div>
	
					<h2 class="panel-title">Clients List
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
										<th>Phone</th>
										<th>Mobile</th>
										<th>Collector</th>
										<th>Address</th>
										<th>Actions</th>
									</tr>
								</thead>
										
								<tbody>
									@foreach ($data['clientsArr']['data'] as $client)
										<tr>
											<td>{{ $client['id'] }}</td>
											<td>{{ $client['client_name'] }}</td>
											<td>{{ $client['client_phone'] }}</td>
											<td>{{ $client['client_mobile'] }}</td>
											<td>{{ $client['collector_name'] }}</td>
											<td>{{ $client['client_address'] }}</td>
											
					
											<td class="actions">
												<a href="{!! URL::route('clients.edit',$client['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('clients.show',$client['id'])!!}" id="{{ $client['id'] }}" class="info-btn"><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $client['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('clients.destroy',$client['id']),'method'=>'DELETE','style'=>'display:inline' )) !!}
									                {!! Form::hidden('id', $client['id']) !!}
													<button id="del_{{ $client['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
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
				<div class="panel-footer text-center">
					
				<?php echo $data['links']; ?>

				</div>
			</section>
		</div>
		
	</div>
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