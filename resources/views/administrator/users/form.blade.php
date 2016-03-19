	
	@if($data['action_name'] == 'areas.edit')	
		{!! Form::open(array('url' => URL::route('areas.update',$data['areas']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
	@else
		{!! Form::open(array('url' => 'areas','class'=>'form-horizontal form-bordered')) !!}
	@endif

	<div class="form-group">		
		<label class="col-md-3 control-label" for="area_name">Area Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="area_name" name="area_name" placeholder="Area Name" value="@if(!empty($data['areas'])){{ $data['areas']['area_name'] }}@endif">
			@if ($errors->has('area_name'))<span class="help-block text-danger">{!!$errors->first('area_name')!!}</span>@endif
			
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="area_code">Area Code</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" value="@if(!empty($data['areas'])){{ $data['areas']['area_code'] }}@endif" @if(!empty($data) && !empty($data['areas'])){{'readonly'}}@endif>
			@if ($errors->has('area_code'))<span class="help-block text-danger">{!!$errors->first('area_code')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="area_description">Area Description</label>
		<div class="col-md-6">
			<textarea class="form-control" id="area_description" name="area_description" placeholder="Area Description">@if(!empty($data['areas'])){{ $data['areas']['area_description'] }}@endif</textarea> 
			@if ($errors->has('area_description'))<span class="help-block text-danger">{!!$errors->first('area_description')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}