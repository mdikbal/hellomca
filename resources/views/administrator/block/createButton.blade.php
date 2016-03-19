<?php 
	$routeArray = explode('.',Route::getCurrentRoute()->getName());
	$controller = $routeArray['0'];
?>
<a class="btn btn-success" href="{!! URL::route(''.$controller.'.index')!!}">{{ ucfirst($controller) }} </a>
@include('administrator.block.back')
