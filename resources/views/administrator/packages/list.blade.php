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
	
					<h2 class="panel-title">Packages List
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
										<th>Package Name</th>
										<th>Package Price</th>
										<th>Client Number</th>
										<th>Actions</th>
									</tr>
								</thead>
										
								<tbody>
									@foreach ($data['packages'] as $package)
										<tr>
											<td>{{ $package['id'] }}</td>
											<td>{{ $package['package_name'] }}</td>
											<td>{{ $package['package_price'] }}</td>
											<td>{{ $package['client_number'] }}</td>
											
											<td class="actions">
												<a href="{!! URL::route('packages.edit',$package['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('packages.show',$package['id'])!!}" id="{{ $package['id'] }}" class=""><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $package['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('packages.destroy',$package['id']),'method'=>'DELETE')) !!}
									                {!! Form::hidden('id', $package['id']) !!}
													<button id="del_{{ $package['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
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