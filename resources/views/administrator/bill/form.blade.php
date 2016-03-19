	
	@if(Route::getCurrentRoute()->getName() == 'bill.edit')	
		{!! Form::open(array('url' => URL::route('bill.update',$data['areas']['id']),'class'=>'form-horizontal form-bordered','method'=> 'PUT')) !!}
	@else
		{!! Form::open(array('url' => 'bill','class'=>'form-horizontal form-bordered')) !!}
	@endif



	<div class="form-group">
		<label class="col-md-3 control-label" for="client_name">Client Name</label>
		<div class="col-md-6">
		  <input id="clientName" type="text" class="form-control">
		</div>
	
	</div>


	 
	<div class="ui-widget" style="margin-top:2em; font-family:Arial">
	  Result:
	  <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
	</div>


<!-- bill_month
bill_type
client_id
bill_year
amount
package_id

 -->

	<div class="form-group">		
		<label class="col-md-3 control-label" for="area_name">Area Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="area_name" name="area_name" placeholder="Area Name" value="@if(!empty($data['areas']) && !empty($data)){{ $data['areas']['area_name'] }}@endif">
			@if ($errors->has('area_name'))<span class="help-block text-danger">{!!$errors->first('area_name')!!}</span>@endif
			
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="area_code">Area Code</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="area_code" name="area_code" placeholder="Area Code" value="@if(!empty($data['areas']) && !empty($data)){{ $data['areas']['area_code'] }}@endif" @if(!empty($data) && !empty($data['areas']) && !empty($data)){{'readonly'}}@endif>
			@if ($errors->has('area_code'))<span class="help-block text-danger">{!!$errors->first('area_code')!!}</span>@endif
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="area_description">Area Description</label>
		<div class="col-md-6">
			<textarea class="form-control" id="area_description" name="area_description" placeholder="Area Description">@if(!empty($data['areas']) && !empty($data)){{ $data['areas']['area_description'] }}@endif</textarea> 
			@if ($errors->has('area_description'))<span class="help-block text-danger">{!!$errors->first('area_description')!!}</span>@endif
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6 text-right">
			<input type="submit" class="btn btn-success" value="Save">
		</div>
	</div>

	{!! Form::close()!!}


	@section('customjs')
	  <script type="text/javascript">
	  $(document).ready(function(){

	  	$('#clientName').keyup(function(){

	  		 var values = $(this).val();
	  		 $.ajax({
		        url: "http://isp.dev/Administrator/clientlist",
		        type: "get",
		        data: values ,
		        success: function (response) {
		           // you will get response from your php page (what you echo or print)                 

		        },
		        error: function(jqXHR, textStatus, errorThrown) {
		           console.log(textStatus, errorThrown);
		        }


		    });
	  	});


	  });
	  </script>>
	@stop