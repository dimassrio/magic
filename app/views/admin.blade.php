@extends('layout.layout-master')

@section('body')
	<div class="clearfix section">
		<div class="large-3 columns no-left-padding text-right" id="sidebar-admin">
			<h4>FEATURE</h4>
			<ul>
				<li><a href="">VESSEL INFORMATION</a></li>
				<li><a href="">TRACK AND TRACE</a></li>
			</ul>
			<hr>
			<h4>ADMINISTRATION</h4>
			<ul>
				<li><a href="">USER INFORMATION</a></li>
				<li><a href="">USER SUBSCRIBE</a></li>
			</ul>
			<hr>
			<h4>CONTACT</h4>
			<ul>
				<li><a href="">CONTACT ILCS</a></li>
			</ul>
		</div>
		<div class="large-9 columns no-right-padding no-left-margin no-left-padding" id="content-admin">
			<img src="{{asset('assets/images/admin-vessel.jpg')}}" alt="">
			<h1>VESSEL INFORMATION</h1>
		</div>
	</div>
@stop