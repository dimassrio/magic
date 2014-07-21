@extends('layout.layout-master')

@section('body')
	<div id="index-banner">
		<div class="row">
			<div class="small-6 columns small-offset-3">
				<h1 class="text-center">NO MORE HASSLE</h1>
			</div>
		</div>
		<div class="row">
			<div class="small-8 columns small-offset-2">
				<h2 class="text-center">REAL LIFE PORT DATA ON YOUR DEVICE</h2>
			</div>
		</div>
		
	</div>
	
	<div id="index-feature-section" class="row section">
		<div class="content active" id="panel-index-feature">
				<div class="small-12 medium-6 large-3 columns text-center">
					<i class="fa fa-clock-o fa-5x"></i>
					<h3 class="section">24 Hours SERVICE</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium quia, voluptatum error id magnam magni sapiente est dolor tempora porro aperiam esse odit, ullam qui numquam? Excepturi, libero, quisquam.</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<i class="fa fa-search fa-2x"></i>
					<i class="fa fa-database fa-5x"></i>
					<h3 class=" section">Track and Trace</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, officia dignissimos assumenda dicta dolores perspiciatis fugit, excepturi, quaerat voluptatem distinctio ab aliquid maiores sed itaque doloremque repudiandae fugiat nemo neque!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<i class="fa fa-globe fa-5x"></i>
					<h3 class="section">Globally Connected</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut quidem aut hic recusandae dolore dolorum soluta tempora ipsam in suscipit beatae, earum id commodi exercitationem voluptatibus error pariatur! Aperiam!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center last">
						<i class="fa fa-lock fa-2x"></i>
						<i class="fa fa-database fa-5x"></i>
					<h3 class="section">Secured Information</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure vitae quibusdam nesciunt, eaque veniam enim aperiam sit hic, minima quasi eligendi aspernatur eos, officia odio sint possimus adipisci omnis quos.</p>
				</div>
			</div>
	</div>

	<div id="index-news-section" class="row section">
		<ul class="tabs" data-tab>
			<li class="tab-title active"><a href="#panel-index-news" >NEWS</a></li>
		</ul>
		<div class="tabs-content">
			<div class="content active" id="panel-index-news">
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">24H SERVICE</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium quia, voluptatum error id magnam magni sapiente est dolor tempora porro aperiam esse odit, ullam qui numquam? Excepturi, libero, quisquam.</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class=" section">FEATURE 2</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, officia dignissimos assumenda dicta dolores perspiciatis fugit, excepturi, quaerat voluptatem distinctio ab aliquid maiores sed itaque doloremque repudiandae fugiat nemo neque!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 3</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut quidem aut hic recusandae dolore dolorum soluta tempora ipsam in suscipit beatae, earum id commodi exercitationem voluptatibus error pariatur! Aperiam!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center last">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 4</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure vitae quibusdam nesciunt, eaque veniam enim aperiam sit hic, minima quasi eligendi aspernatur eos, officia odio sint possimus adipisci omnis quos.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="index-photos-section" class="row section">
		<ul class="tabs" data-tab>
			<li class="tab-title active"><a href="#panel-index-photo" >PHOTO</a></li>
			<li class="tab-title"><a href="#panel-index-video" >VIDEO</a></li>
		</ul>
		<div class="tabs-content">
			<div class="content active" id="panel-index-photo">
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">24H SERVICE</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium quia, voluptatum error id magnam magni sapiente est dolor tempora porro aperiam esse odit, ullam qui numquam? Excepturi, libero, quisquam.</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class=" section">FEATURE 2</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, officia dignissimos assumenda dicta dolores perspiciatis fugit, excepturi, quaerat voluptatem distinctio ab aliquid maiores sed itaque doloremque repudiandae fugiat nemo neque!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 3</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut quidem aut hic recusandae dolore dolorum soluta tempora ipsam in suscipit beatae, earum id commodi exercitationem voluptatibus error pariatur! Aperiam!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center last">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 4</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure vitae quibusdam nesciunt, eaque veniam enim aperiam sit hic, minima quasi eligendi aspernatur eos, officia odio sint possimus adipisci omnis quos.</p>
				</div>
			</div>

			<div class="content" id="panel-index-video">
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">24H SERVICE</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda praesentium quia, voluptatum error id magnam magni sapiente est dolor tempora porro aperiam esse odit, ullam qui numquam? Excepturi, libero, quisquam.</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class=" section">FEATURE 2</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, officia dignissimos assumenda dicta dolores perspiciatis fugit, excepturi, quaerat voluptatem distinctio ab aliquid maiores sed itaque doloremque repudiandae fugiat nemo neque!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 3</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ut quidem aut hic recusandae dolore dolorum soluta tempora ipsam in suscipit beatae, earum id commodi exercitationem voluptatibus error pariatur! Aperiam!</p>
				</div>
				<div class="small-12 medium-6 large-3 columns text-center last">
					<img src="{{asset('assets/images/feature-image-1.png')}}" alt="" class="th" width="200">
					<h3 class="section">FEATURE 4</h3>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure vitae quibusdam nesciunt, eaque veniam enim aperiam sit hic, minima quasi eligendi aspernatur eos, officia odio sint possimus adipisci omnis quos.</p>
				</div>
			</div>
		</div>
	</div>
@stop