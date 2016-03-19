<?php 
	$routeArray = explode('.',Route::getCurrentRoute()->getName());
	$controller = $routeArray['0'];
?>
<a class="btn btn-success" href="{!! URL::route(''.$controller.'.create')!!}">Create</a>
@include('administrator.block.back')
