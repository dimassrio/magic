<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1>
				<a href="{{url('/')}}">
				<img src="{{asset('assets/images/logo.png')}}" alt="" width="100px" class="hide-for-large-up">
				<img src="{{asset('assets/images/logo-full.png')}}" alt="" width="400px" class="show-for-large-up">
				</a>
			</h1>
		</li>
		 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>

	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			@if(!Auth::check())
			<li><a href="{{url('login')}}">Login</a></li>
			<li><a href="#">Register</a></li>
			@else
			<li><a href="{{url('logout')}}" class="button alert">Logout</a></li>
			@endif
			<!-- <li class="has-dropdown">
				<a href="#">Right Button Dropdown</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
			</li> -->
		</ul>
		<!-- Left Nav Section -->
		<ul class="left">
			<li><a href="#">About Us</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Partners</a></li>
			<li><a href="#">Media</a></li>
			<!-- <li><a href="#">Left Nav Button</a></li> -->
		</ul>
	</section>
</nav>