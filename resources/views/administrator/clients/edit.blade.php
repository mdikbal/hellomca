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
	
					<h2 class="panel-title">Edit A Client</h2>
				</header>
				<div class="panel-body">
					@include('administrator.alart')
					@include('administrator.clients.form')

				</div>
			</section>
		</div>
	</div>
@stop