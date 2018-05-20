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




	public static function thumb($id, $thumb_name){

		$resume = DB::table('resumes')->first();

		$template = Template::findOrFail($id);

		$resumeid = $resume->id;

		$sections = Section::all();


		$personal = Content::getPersonalContent($resumeid);
		
		$summary = Content::getSummaryContent($resumeid);

		//work details
		
		$work_section_id = DB::table('sections')->where('section_ref', '=', 'work')->pluck('id');
		
		$works = DB::table('contents')->where('section_id', '=', $work_section_id)->where('resume_id', '=', $resumeid)->get();
		

		//education details
		
		$education_section_id = DB::table('sections')->where('section_ref', '=', 'education')->pluck('id');
		
		$educations = DB::table('contents')->where('section_id', '=', $education_section_id)->where('resume_id', '=', $resumeid)->get();
		

		//skill details
		
		$skill_section_id = DB::table('sections')->where('section_ref', '=', 'skill')->pluck('id');
		
		$skills = DB::table('contents')->where('section_id', '=', $skill_section_id)->where('resume_id', '=', $resumeid)->get();
		
		//referees details
		
		$referee_section_id = DB::table('sections')->where('section_ref', '=', 'reference')->pluck('id');
		
		$referees = DB::table('contents')->where('section_id', '=', $referee_section_id)->where('resume_id', '=', $resumeid)->get();
		
		//convert CV to image then  return view with image URL

		$image = Image::loadView('resumes.image', 
			array(
				'template'=>$template, 
				'personal'=>$personal,
				'summary'=>$summary,
				'work_section_id'=>$work_section_id,
				'works'=>$works,
				'education_section_id'=>$education_section_id,
				'educations'=>$educations,
				'skill_section_id'=>$skill_section_id,
				'skills'=>$skills,
				'referee_section_id'=>$referee_section_id,
				'referees'=>$referees,
				'resume'=>$resume
			));

		

		 $image->save(public_path('img/temps/'.$thumb_name));
	}



}