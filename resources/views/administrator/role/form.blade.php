		@if(isset($data['xml']))

			@foreach ($data['xml'] as $key => $eachController) 
				

					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
											
										</div>
						
										<h2 class="panel-title">{!! ucfirst($eachController['name']) !!} <small>{!! ucfirst($eachController['title']) !!}</small></h2>
									</header>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">										
											
												@foreach ($eachController as $key => $eachAction) 										
												<?php
			  										$controller_action = strtolower($eachAction->controller->__toString().'_'.$eachAction->action->__toString());
			  													  										
												?>
													<div class="col-sm-3">
														<div class="checkbox-custom checkbox-default">
															<input type="checkbox" @if(isset($data['roles']['options'][$controller_action]) && ($data['roles']['options'][$controller_action] == '1')) checked="checked" @endif value="1" name="{!! strtolower($eachAction->controller->__toString().'_'.$eachAction->action->__toString()) !!}" id="{!! $eachAction->controller->__toString().$eachAction->action->__toString() !!}">
															<label for="{!! $eachAction->controller->__toString().'_'.$eachAction->action->__toString() !!}">{!! $eachAction->description->__toString() !!}</label>
														</div>
													</div>	

												@endforeach																											
													
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>

			@endforeach
		@endif			

		<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">										
						
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-6 text-center">
									<input type="submit" class="btn btn-success" value="Save">
								</div>
							</div>																										
								
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	








