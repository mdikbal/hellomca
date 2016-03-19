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
	
					<h2 class="panel-title">{{ $data['client']['client_name']}}</h2>
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
									<td>{{ $data['client']['id']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Clients Name</td>
									<td>{{ $data['client']['client_name']}}
								</td>
								<tr>									
									<td class="text-right">Package ID</td>
									<td>{{ $data['client']['package_id']}}
								</td>
								<tr>									
									<td class="text-right">Collector Id</td>
									<td>{{ $data['client']['collector_id']}}
								</td>
								<tr>									
									<td class="text-right">Collector Name</td>
									<td>{{ $data['client']['collector_name']}}
								</td>
								
								<tr>									
									<td class="text-right">Client Address</td>
									<td>{{ $data['client']['client_address']}}
								</td>
								<tr>									
									<td class="text-right">Clients Email</td>
									<td>{{ $data['client']['client_email']}}
								</td>
								<tr>									
									<td class="text-right">Phone Number</td>
									<td>{{ $data['client']['client_phone']}}
								</td>
								<tr>									
									<td class="text-right">Mobile Number</td>
									<td>{{ $data['client']['client_mobile']}}
								</td>
								<tr>									
									<td class="text-right">Connection Start</td>
									<td>{{ $data['client']['connection_start']}}
								</td>
								<tr>									
									<td class="text-right">Client Type</td>
									<td>{{ $data['client']['client_type']}}
								</td>
								<tr>									
									<td class="text-right">Area Id</td>
									<td>{{ $data['client']['area_id']}}
								</td>
								<tr>									
									<td class="text-right">Created At</td>
									<td>{{ $data['client']['created_at']}}
								</td>
								<tr>									
									<td class="text-right">Last Update</td>
									<td>{{ $data['client']['updated_at']}}
								</td>
							

							</tbody>
						</table>
					</div>
			

				</div>
			</section>
		</div>
	</div>
@stop