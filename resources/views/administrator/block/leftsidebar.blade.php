<aside id="sidebar-left" class="sidebar-left">

	<div class="sidebar-header">
		<div class="sidebar-title">
			Navigation
		</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li class="nav-active">
						<a href="index.html">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>
					</li>
	
					<li class="nav-parent">
						<a><i class="fa fa-sitemap" aria-hidden="true"></i><span>Area</span></a>
						<ul class="nav nav-children">
							<li><a href="{!! URL::route('areas.index')!!}">Manage Area</a></li>
							<li><a href="{!! URL::route('areas.create')!!}">Create New Area</a></li>
							
						</ul>
					</li>					
					<li class="nav-parent">
						<a><i class="fa fa-tasks" aria-hidden="true"></i><span>Packages</span></a>
						<ul class="nav nav-children">
							<li><a href="{!! URL::route('packages.index')!!}">Manage Package</a></li>
							<li><a href="{!! URL::route('packages.create')!!}">Create New Package</a></li>
							
						</ul>
					</li>

					<li class="nav-parent">
						<a><i class="fa fa-user" aria-hidden="true"></i><span>Collector</span></a>
						<ul class="nav nav-children">
							<li><a href="{!! URL::route('collectors.index')!!}">Manage Collector</a></li>
							<li><a href="{!! URL::route('collectors.create')!!}">Create New Collector</a></li>
							
						</ul>
					</li>

					<li class="nav-parent">
						<a><i class="fa fa-users" aria-hidden="true"></i><span>Clients</span></a>
						<ul class="nav nav-children">
							<li><a href="{!! URL::route('clients.index')!!}">Manage Clients</a></li>
							<li><a href="{!! URL::route('clients.create')!!}">Create New Clients</a></li>
							
						</ul>
					</li>
					<li class="nav-parent">
						<a><i class="fa fa-user" aria-hidden="true"></i><span>User</span></a>
						<ul class="nav nav-children">
							<li><a href="pages-signup.html">Manage Users</a></li>
							<li><a href="pages-signin.html">Create New User</a></li>
							
						</ul>
					</li>
					<li class="nav-parent">
						<a><i class="fa fa-unlock-alt" aria-hidden="true"></i><span>Roles</span></a>
						<ul class="nav nav-children">
							<li><a href="pages-signup.html">Manage Roles</a></li>
							<li><a href="pages-signin.html">Create New Roles</a></li>
							
						</ul>
					</li>

					<li class="nav-parent">
						<a><i class="fa fa-cog" aria-hidden="true"></i><span>Preferences</span></a>
						<ul class="nav nav-children">
							<li><a href="pages-signup.html">Settings</a></li>
													
						</ul>
					</li>			

				</ul>
			</nav>

			<hr class="separator" />

			<div class="sidebar-widget widget-stats">
				<div class="widget-header">
					<h6>Company Stats</h6>
					<div class="widget-toggle">+</div>
				</div>
				<div class="widget-content">
					<ul>
						<li>
							<span class="stats-title">Stat 1</span>
							<span class="stats-complete">85%</span>
							<div class="progress">
								<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
									<span class="sr-only">85% Complete</span>
								</div>
							</div>
						</li>
						<li>
							<span class="stats-title">Stat 2</span>
							<span class="stats-complete">70%</span>
							<div class="progress">
								<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
									<span class="sr-only">70% Complete</span>
								</div>
							</div>
						</li>
						<li>
							<span class="stats-title">Stat 3</span>
							<span class="stats-complete">2%</span>
							<div class="progress">
								<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
									<span class="sr-only">2% Complete</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

</aside>
<!-- end: sidebar -->