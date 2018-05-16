<?php

class Section extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public static function getSectionTitle($id){

		$section =Section::find($id);

		return $section->name;
	}

}