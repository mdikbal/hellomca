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
	
					<h2 class="panel-title">Collectors List
						@include('administrator.block.listButton')
					</h2>
				</header>
				<div class="panel-body">
					@if(!empty($data) && $data['status'] == 'success')
						<div class="table-responsive">
							<table class="table table-bordered mb-none">
								<thead>
									<tr class="dark">
										<th>#</th>
										<th>Collector Name</th>
										<th>Mobile</th>
										<th>Client Number</th>
										<th>Actions</th>
									</tr>
								</thead>
										
								<tbody>
									@foreach ($data['collectors'] as $collector)
										<tr>
											<td>{{ $collector['id'] }}</td>												
											<td>{{ $collector['collector_name'] }}</td>												
											<td>{{ $collector['collector_mobile'] }}</td>												
											<td>{{ $collector['clients_number'] }}</td>												
											<td class="actions">
												<a href="{!! URL::route('collectors.edit',$collector['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('collectors.show',$collector['id'])!!}" id="{{ $collector['id'] }}" class="delete-row delete-btn"><i class="fa fa-info"></i></a>
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
@stop