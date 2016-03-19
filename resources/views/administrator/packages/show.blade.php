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
	
					<h2 class="panel-title">{{ $data['package']['package_name']}}</h2>
				</header>
				<div class="panel-body">
				
					<div class="table-responsive">
						<table class="table mb-none table-bordered">
							<thead>
								<tr>									
									<th class="text-right col-sm-6">Item</th>
									<th class="col-sm-6">Details</th>
								</tr>
							</thead>
							<tbody>

								<tr>									
									<td class="text-right">#</td>
									<td>{{ $data['package']['id']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Package Name</td>
									<td>{{ $data['package']['package_name']}}</td>
								</tr>
								<tr>
									
									<td class="text-right">Package Price</td>
									<td>{{ $data['package']['package_price']}}</td>
								</tr>

								<tr>									
									<td class="text-right">Package Description</td>
									<td>{{ $data['package']['package_description']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Created At</td>
									<td>{{ $data['package']['created_at']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Updated At</td>
									<td>{{ $data['package']['updated_at']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Created By</td>
									<td>{{ $data['package']['created_by']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Updated By</td>
									<td>{{ $data['package']['updated_by']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Clients Quantity</td>
									<td>{{ $data['package']['client_number']}}</td>
								</tr>

							</tbody>
						</table>
					</div>
			

				</div>
			</section>
		</div>
	</div>
@stop