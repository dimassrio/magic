@extends('layout.layout-master')

@section('body')
	<div class="row full-width">
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<a href="#" class="left-off-canvas-toggle show-for-small-only">MENU</a>
				<aside class="left-off-canvas-menu">
					@include('include.sidebar')
				</aside>
				<div class="row">
					<div class="large-3 medium-2 columns show-for-medium-up">
						@include('include.sidebar')
					</div>
					<div class="large-9 small-12 medium-10 columns">
						<div class="row">
							<div class="large-12 columns">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop