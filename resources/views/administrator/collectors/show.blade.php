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
	
					<h2 class="panel-title">{{ $data['collector']['collector_name']}} 
						@include('administrator.block.back')					

					</h2>
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
									<td>{{ $data['collector']['id']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Area Name</td>
									<td>{{ $data['collector']['collector_name']}}</td>
								</tr>
								<tr>
									
									<td class="text-right">Area Code</td>
									<td>{{ $data['collector']['father_name']}}</td>
								</tr>

								<tr>									
									<td class="text-right">Area Description</td>
									<td>{{ $data['collector']['collector_address']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Created At</td>
									<td>{{ $data['collector']['created_at']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Updated At</td>
									<td>{{ $data['collector']['updated_at']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Created By</td>
									<td>{{ $data['collector']['created_by']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Updated By</td>
									<td>{{ $data['collector']['updated_by']}}</td>
								</tr>
								<tr>									
									<td class="text-right">Clients Number</td>
									<td></td>
								</tr>

							</tbody>
						</table>
					</div>
			

				</div>
			</section>
		</div>
	</div>
@stop