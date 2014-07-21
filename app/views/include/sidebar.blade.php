<div id="sidebar">
	<div class="clearfix show-for-large-up">
		<div class="small-12 medium-12 large-4 columns">
			@if(Auth::check())
				<img src="{{asset('uploads/users/images').'/'.Auth::user()->picture}}" alt="" class="th">
			@endif
		</div>
		<div class="large-8 show-for-large-up columns">
			<h4>WELCOME</h4>
			@if(Auth::check())
				<p>{{Auth::user()->name}}</p>
			@endif
		</div>
	</div>

<div class="clearfix">
	<ul class="sidebar-menu off-canvas-list">
		<!-- <li><a href=""><i class="fa fa-dashboard hide-for-large-up"></i><span class="show-for-large-up"><i class="fa fa-dashboard"></i> Dashboard</span></a></li> -->
		<li><a href=""><i class="fa fa-info show-for-medium-only"></i><span class="hide-for-medium-only"><i class="fa fa-info"></i> Vessel Info</span></a></li>
		<li><a href="{{url('administrator/schedule')}}"><i class="fa fa-calendar show-for-medium-only"></i><span class="hide-for-medium-only"><i class="fa fa-calendar"></i> Vessel Schedule</span></a></li>
		<li><a href=""><i class="fa fa-map-marker show-for-medium-only"></i><span class="hide-for-medium-only"><i class="fa fa-map-marker "></i> Track and Trace</span></a></li>
		<li><a href=""><i class="fa fa-file-text show-for-medium-only"></i><span class="hide-for-medium-only"><i class="fa fa-file-text"></i> Manifest Data</span></a></li>
		<li><a href=""><i class="fa fa-archive show-for-medium-only"></i><span class="hide-for-medium-only"><i class="fa fa-archive"></i> Container Info</span></a></li>
		<!-- <li><a href=""><i class="fa fa-dashboard"></i> <span class="show-for-large-up inline"><i class="fa fa-dashboard"></i> Dashboard</span></a></li>
		<li><a href=""><i class="fa fa-dashboard"></i> <span class="show-for-large-up inline"><i class="fa fa-dashboard"></i> Vessel Info</span></a></li>
		<li><a href=""><i class="fa fa-calendar"></i> <span class="show-for-large-up inline"><i class="fa fa-calendar"></i> Vessel Schedule</span></a></li>
		<li><a href=""><i class="fa fa-dashboard"></i> <span class="show-for-large-up inline"><i class="fa fa-calendar"></i> Vessel Route</span></a></li>
		<li><a href=""><i class="fa fa-dashboard"></i> <span class="show-for-large-up inline"><i class="fa fa-calendar"></i> Vessel Order</span></a></li>
		<li><a href=""><i class="fa fa-file-text"></i> <span class="show-for-large-up inline"><i class="fa fa-file-text"> Manifest Data</span></a></li>
		<li><a href=""><i class="fa fa-dashboard"></i> <span class="show-for-large-up inline"><i class="fa fa-dashboard">Container Info</span></a></li> -->
	</ul>
</div>
</div>