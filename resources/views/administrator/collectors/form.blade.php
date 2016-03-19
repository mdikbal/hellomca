	
	@if( 'collectors.edit'== Route::getCurrentRoute()->getName())	
		{!! Form::open(array('url' => URL::route('collectors.update',$data['collector']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
	@else
		{!! Form::open(array('url' => 'collectors','class'=>'form-horizontal form-bordered')) !!}
	@endif


	<div class="form-group">		
		<label class="col-md-3 control-label" for="collector_name">Collector Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="collector_name" name="collector_name" placeholder="Collector Name" value="@if(!empty($data['collector'])){{ $data['collector']['collector_name'] }}@endif">
			@if ($errors->has('collector_name'))<span class="help-block text-danger">{!!$errors->first('collector_name')!!}</span>@endif
			
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('area_id', 'Area', array('class' => 'col-md-3 control-label')) !!}
		<div class="col-md-6">
			<?php $area = null; 
			if(!empty($data['collector']['area_id']))
				{
					$area = $data['collector']['area_id'];
				}
			?>
			{!! Form::select('area_id', $data['areas'],$area,array('class' => 'form-control')) !!}
			@if ($errors->has('area_id'))<span class="help-block text-danger">{!!$errors->first('area_id')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">		
		<label class="col-md-3 control-label" for="father_name">Collectors Father Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="father_name" name="father_name" placeholder="Collectors Father Name" value="@if(!empty($data['collector'])){{ $data['collector']['father_name'] }}@endif">
			@if ($errors->has('father_name'))<span class="help-block text-danger">{!!$errors->first('father_name')!!}</span>@endif
			
		</div>
	</div>	
	<div class="form-group">		
		<label class="col-md-3 control-label" for="collector_email">Collectors Email</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="collector_email" name="collector_email" placeholder="Collectors Email" value="@if(!empty($data['collector'])){{ $data['collector']['collector_email'] }}@endif">
			@if ($errors->has('collector_email'))<span class="help-block text-danger">{!!$errors->first('collector_email')!!}</span>@endif
			
		</div>
	</div>	
	<div class="form-group">		
		<label class="col-md-3 control-label" for="collector_mobile">Collectors Mobile</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="collector_mobile" name="collector_mobile" placeholder="Collectors Mobile" value="@if(!empty($data['collector'])){{ $data['collector']['collector_mobile'] }}@endif">
			@if ($errors->has('collector_mobile'))<span class="help-block text-danger">{!!$errors->first('collector_mobile')!!}</span>@endif
			
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="collector_address">Collector Address</label>
		<div class="col-md-6">
			<textarea class="form-control" id="collector_address" name="collector_address" placeholder="Collector Address">@if(!empty($data['collector'])){{ $data['collector']['collector_address'] }}@endif</textarea> 
			@if ($errors->has('collector_address'))<span class="help-block text-danger">{!!$errors->first('collector_address')!!}</span>@endif
		</div>
	</div>



	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}