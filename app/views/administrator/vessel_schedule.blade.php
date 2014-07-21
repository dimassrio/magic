@extends('layout.layout-master')

@section('body')
	<div class="row full-width">
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<a href="#" class="left-off-canvas-toggle show-for-small-only">MENU</a>
				<aside class="left-off-canvas-menu">
					@include('include.sidebar')
				</aside>
				<div class="row min-height">
					<div class="large-3 medium-2 columns show-for-medium-up">
						@include('include.sidebar')
					</div>
					<div class="large-9 small-12 medium-10 columns">
						<div class="row">
							<div class="large-12 columns">
								<h3><i class="fa fa-calendar"></i> Vessel Schedule</h3>
								<table width="100%">
									<thead>
									<tr>
										<th>Vessel Name</th>
										<th>Voyage No</th>
										<th class="show-for-small-only">TIME</th>
										<th class="show-for-large-up">ETD</th>
										<th class="show-for-large-up">ETA</th>
										<th class="show-for-large-up">ATD</th>
										<th class="show-for-large-up">ATA</th>
										<th class="show-for-medium-up">Port of Origin</th>
										<th>Port of Destination</th>
									</tr>
									</thead>
									<tbody>
										@foreach ($schedules as $key => $schedule)
											@if($schedule->status == 'Loading')
											<tr class="tr-loading" href="#" data-reveal-id="scheduleModal">
											@elseif ($schedule->status == 'Unloading')
											<tr class="tr-unloading" href="#" data-reveal-id="scheduleModal">
											@elseif($schedule->status == 'On Voyage')
											<tr class="tr-onvoyage" href="#" data-reveal-id="scheduleModal">
											@else
											<tr>
											@endif

												<td>{{$schedule->vessel->name}}</td>
												<td>{{$schedule->voyage_no}}</td>
												<td class="show-for-small-only">
													@if($schedule->status == 'Loading')
														ETD : {{$schedule->etd}}
													@elseif($schedule->status == 'Unloading')
														ATA : {{$schedule->ata}}
													@elseif($schedule->status == 'On Voyage')
														ETA : {{$schedule->eta}}
													@endif
													
												</td>
												<td class="show-for-large-up">{{$schedule->etd}}</td>
												<td class="show-for-large-up">{{$schedule->eta}}</td>
												<td class="show-for-large-up">{{$schedule->atd}}</td>
												<td class="show-for-large-up">{{$schedule->ata}}</td>
												<td class="show-for-medium-up">{{$schedule->poo}}</td>
												<td>{{$schedule->pod}}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

						<div id="scheduleModal" class="reveal-modal" data-reveal>
							<h4>Vessel Route</h4>
							<table>
								<thead>
									<tr>
										<th>Port Code</th>
										<th class="show-for-medium-up">Port Name</th>
										<th>Country</th>
										<th class="show-for-medium-up">ETD</th>
										<th class="show-for-medium-up">ETA</th>
										<th class="show-for-medium-up">ATD</th>
										<th class="show-for-medium-up">ATA</th>
										<th>Port Information</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop