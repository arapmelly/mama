<?php

class Template extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];



	public static function getTempName($id){

		$temp = Template::find($id);

		return $temp->name;
	}

}