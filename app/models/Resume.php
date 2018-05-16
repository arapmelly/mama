<?php

class Resume extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public static function getCVRef($id){

		$resume = Resume::find($id);

		return $resume->cv_ref;
	}


	public static function contentExist($sectionid, $resumeid){

		//this will check if all content has been submitted for the sections.

		$cont = DB::table('contents')->where('section_id', '=', $sectionid)->where('resume_id', '=', $resumeid)->count();

		if($cont >= 1){

			return true;

		} else {

			return false;
		}

	}


	public static function sectionExist($section_ref, $resumeid){

		//this will check if all content has been submitted for the sections.
		$secid = DB::table('sections')->where('section_ref', '=', $section_ref)->pluck('id');

		$cont = DB::table('contents')->where('section_id', '=', $secid)->where('resume_id', '=', $resumeid)->count();

		if($cont >= 1){

			return true;

		} else {

			return false;
		}

	}



}