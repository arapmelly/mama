<?php

class Level extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public static function getLevelName($id){

		$level = Level::find($id);

		return $level->name;
	}

}