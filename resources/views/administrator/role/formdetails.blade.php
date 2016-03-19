<div class="col-sm-8">
	<div class="form-group">		
		<label class="col-md-3 control-label" for="role_name">Role Name</label>
		<div class="col-md-9">
			<input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Name" value="@if(!empty($data['roles'])){{ $data['roles']['role_name'] }}@endif">
			@if ($errors->has('role_name'))<span class="help-block text-danger">{!!$errors->first('role_name')!!}</span>@endif
			
		</div>
	</div>	
	<div class="form-group">		
		<label class="col-md-3 control-label" for="role_description">Role Description</label>
		<div class="col-md-9">
			<textarea class="form-control" id="role_description" name="role_description" placeholder="Role Description" >@if(!empty($data['roles'])){{ $data['roles']['role_description'] }}@endif</textarea> 
			@if ($errors->has('role_description'))<span class="help-block text-danger">{!!$errors->first('role_description')!!}</span>@endif
			
		</div>
	</div>
</div>
<div class="col-sm-4">
	<input type="submit" class="btn btn-success" value="Save Role Information">			
	<button type="button" class="checkall btn btn-warning" >Check All</button>			
	<button type="button" class="uncheck btn btn-primary" >Uncheck</button>			
	
</div>