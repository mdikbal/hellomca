	@if($data['action_name'] == 'clients.edit')	
		{!! Form::open(array('url' => URL::route('clients.update',$data['client']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
	@else
		{!! Form::open(array('url' => 'clients','class'=>'form-horizontal form-bordered')) !!}
	@endif

	<div class="form-group">		
		<label class="col-md-3 control-label" for="client_name">Clients Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="client_name" name="client_name" placeholder="Clients Name" value="@if(!empty($data['client'])){{ $data['client']['client_name'] }}@endif">
			@if ($errors->has('client_name'))<span class="help-block text-danger">{!!$errors->first('client_name')!!}</span>@endif
			
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="client_address">Clients Address</label>
		<div class="col-md-6">
			<textarea class="form-control" id="client_address" name="client_address" placeholder="Clients Address">@if(!empty($data['client'])){{ $data['client']['client_address'] }}@endif</textarea> 
			@if ($errors->has('client_address'))<span class="help-block text-danger">{!!$errors->first('client_address')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('area_id', 'Area', array('class' => 'col-md-3 control-label')) !!}
		<div class="col-md-6">
			<?php $area = null; 
			if(!empty($data['client']['area_id']))
				{
					$area = $data['client']['area_id'];
				}
			?>
			{!! Form::select('area_id', $data['areas'],$area,array('class' => 'form-control')) !!}
			@if ($errors->has('area_id'))<span class="help-block text-danger">{!!$errors->first('area_id')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('package_id', 'Package', array('class' => 'col-md-3 control-label')) !!}
		<div class="col-md-6">
			<?php $package = null; 
			if(!empty($data['client']['package_id']))
				{
					$package = $data['client']['package_id'];
				}
			?>
			{!! Form::select('package_id', $data['packages'],$package,array('class' => 'form-control')) !!}
			@if ($errors->has('package_id'))<span class="help-block text-danger">{!!$errors->first('package_id')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
	{!! Form::label('collector_id', 'Collectors Name', array('class' => 'col-md-3 control-label')) !!}
		<div class="col-md-6">
			<?php $collector = null; 
			if(!empty($data['client']['collector_id']))
				{
					$collector = $data['client']['collector_id'];
				}
			?>
			{!! Form::select('collector_id',  $data['collectors'],$collector,array('class' => 'form-control')) !!}
			@if ($errors->has('collector_id'))<span class="help-block text-danger">{!!$errors->first('collector_id')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label" for="client_email">Email</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="client_email" name="client_email" placeholder="Email" value="@if(!empty($data['client'])){{ $data['client']['client_email'] }}@endif" >
			@if ($errors->has('client_email'))<span class="help-block text-danger">{!!$errors->first('client_email')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-3 control-label" for="client_email">Phone</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="client_phone" name="client_phone" placeholder="Phone" value="@if(!empty($data['client'])){{ $data['client']['client_phone'] }}@endif" >
			@if ($errors->has('client_phone'))<span class="help-block text-danger">{!!$errors->first('client_phone')!!}</span>@endif
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="client_mobile">Mobile</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="client_mobile" name="client_mobile" placeholder="Mobile" value="@if(!empty($data['client'])){{ $data['client']['client_mobile'] }}@endif" >
			@if ($errors->has('client_mobile'))<span class="help-block text-danger">{!!$errors->first('client_mobile')!!}</span>@endif
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="connection_start">Connection Start</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="connection_start" name="connection_start" placeholder="Connection Start" value="@if(!empty($data['client'])){{ $data['client']['connection_start'] }}@endif" >
			@if ($errors->has('connection_start'))<span class="help-block text-danger">{!!$errors->first('connection_start')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
	{!! Form::label('client_type', 'Client Type', array('class' => 'col-md-3 control-label')) !!}
		<div class="col-md-6">
		<?php $client_type = null; 
		if(!empty($data['client']['client_type']))
			{
				$client_type = $data['client']['client_type'];
			}
		?>
		{!! Form::select('client_type', array('retail'=>'Single User','feedOperator'=>'Feed Operator'),$client_type,array('class' => 'form-control')) !!}
			@if ($errors->has('client_type'))<span class="help-block text-danger">{!!$errors->first('client_type')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}