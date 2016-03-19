	
	@if($data['action_name'] == 'packages.edit')	
		{!! Form::open(array('url' => URL::route('packages.update',$data['package']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
	@else
		{!! Form::open(array('url' => 'packages','class'=>'form-horizontal form-bordered')) !!}
	@endif

	<div class="form-group">		
		<label class="col-md-3 control-label" for="package_name">Package Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="package_name" name="package_name" placeholder="package Name" value="@if(!empty($data['package'])){{ $data['package']['package_name'] }}@endif">
			@if ($errors->has('package_name'))<span class="help-block text-danger">{!!$errors->first('package_name')!!}</span>@endif
			
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="package_price">Package Price</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="package_price" name="package_price" placeholder="Package Price" @if($data['action_name'] == 'packages.edit') readonly="readonly" @endif value="@if(!empty($data['package'])){{ $data['package']['package_price'] }}@endif" >
			@if ($errors->has('package_price'))<span class="help-block text-danger">{!!$errors->first('package_price')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="package_description">Package Description</label>
		<div class="col-md-6">
			<textarea class="form-control" id="package_description" name="package_description" placeholder="Package Description">@if(!empty($data['package'])){{ $data['package']['package_description'] }}@endif</textarea> 
			@if ($errors->has('package_description'))<span class="help-block text-danger">{!!$errors->first('package_description')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}