@extends('layout.layout-master')

@section('body')
	<div class="row">
		<div class="large-6 large-centered columns">
			<div id="login-form" class="section">
				<form action="{{url('login')}}" method="post">
				<h4>PLEASE LOGIN</h4>
				<input type="text" name="username" placeholder="username">
				<input type="password" name="password" placeholder="password">
				<input type="submit" class="button small">
			</form>
			</div>
		</div>
	</div>
@stop