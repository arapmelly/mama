<?php

class Icon extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public static function icons(){

		$icons = array(
			'list',
			'home' 
			);

		return $icons;
	}


	public static function layouts(){

		$layouts = array(
			'default',
			'stylish',
			'swiss',
			'mono' 
			);

		return $layouts;
	}


}