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
	
					<h2 class="panel-title">Billing (LIST OF BILL)
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
										<th>Client Name</th>
										<th>Package</th>
										<th>Package Price</th>
										<th>Year</th>
										<th>Month</th>
										<th>Amount</th>
										<th>Actions</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach ($data['bills'] as $bill)
										<tr>
											<td>{{ $bill['id'] }}</td>
											<td title="{{ $bill['client_address'] }}">{{ $bill['client_name'] }}</td>
											<td title="{{ $bill['package_description'] }}">{{ $bill['package_name'] }}</td>
											<td>{{ $bill['package_price'] }}</td>
											<td>{{ $bill['bill_year'] }}</td>
											<td>{{ $bill['bill_month'] }}</td>
											<td>{{ $bill['amount'] }}</td>
											<td class="actions">
												<a href="{!! URL::route('bill.edit',$bill['id'])!!}"><i class="fa fa-pencil"></i></a>
												<a href="{!! URL::route('bill.show',$bill['id'])!!}" id="{{ $bill['id'] }}" class="info-btn"><i class="fa fa-info"></i></a>
												<a href="javascript:void(0)" rel="{{ $bill['id'] }}" class="delete-btn"><i class="fa fa fa-trash"></i></a>
												
												{!! Form::open(array('url' => URL::route('bill.destroy',$bill['id']),'method'=>'DELETE','style'=>'display:inline' )) !!}
									                {!! Form::hidden('id', $bill['id']) !!}
													<button id="del_{{ $bill['id'] }}" type="submit" class="delete-row delete-btn" style="display:none"><i class="fa fa-trash"></i></button>
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