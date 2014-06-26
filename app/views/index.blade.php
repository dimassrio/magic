@extends('layout.layout-master')

@section('body')
	<div id="index-banner" class="section">
		<div class="row">
			<div class="large-6 columns large-offset-3">
				<h1 class="text-center">NO MORE HASSLE</h1>
			</div>
		</div>
		<div class="row">
			<div class="large-8 columns large-offset-2">
				<h2 class="text-center">REAL LIFE PORT DATA ON YOUR DEVICE</h2>
			</div>
		</div>
		
	</div>
	
	<div id="index-feature" class="row section">
		<div class="large-3 columns text-center">
			<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
			<h3 class="section">24H SERVICE</h3>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium quia, voluptatum error id magnam magni sapiente est dolor tempora porro aperiam esse odit, ullam qui numquam? Excepturi, libero, quisquam.</p>
		</div>
		<div class="large-3 columns text-center">
			<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
			<h3 class=" section">FEATURE 2</h3>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, officia dignissimos assumenda dicta dolores perspiciatis fugit, excepturi, quaerat voluptatem distinctio ab aliquid maiores sed itaque doloremque repudiandae fugiat nemo neque!</p>
		</div>
		<div class="large-3 columns text-center">
			<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
			<h3 class="section">FEATURE 3</h3>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut quidem aut hic recusandae dolore dolorum soluta tempora ipsam in suscipit beatae, earum id commodi exercitationem voluptatibus error pariatur! Aperiam!</p>
		</div>
		<div class="large-3 columns text-center last">
			<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
			<h3 class="section">FEATURE 4</h3>
			<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure vitae quibusdam nesciunt, eaque veniam enim aperiam sit hic, minima quasi eligendi aspernatur eos, officia odio sint possimus adipisci omnis quos.</p>
		</div>
	</div>
@stop