
	{!! Form::open(array('url' => 'settings/update','class'=>'form-horizontal form-bordered')) !!}


	<div class="form-group">		
		<label class="col-md-3 control-label" for="site_name">Site Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="site_name" name="site_name" placeholder="Application/Website Name" value="@if(!empty($data['settings'])){{ $data['settings']['site_name'] }}@endif">
			@if ($errors->has('site_name'))<span class="help-block text-danger">{!!$errors->first('site_name')!!}</span>@endif
			
		</div>
	</div>
	


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}