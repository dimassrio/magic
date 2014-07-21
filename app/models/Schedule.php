<?php

class Schedule extends \Eloquent {
	protected $fillable = [];

	public function vessel(){
		return $this->belongsTo('Vessel');
	}
}