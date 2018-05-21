<?php

class Content extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];



	public static function getPersonalContent($id){

		$contents = DB::table('contents')->where('resume_id', '=', $id)->get();

		foreach ($contents as $cont) {
			# code...
			$section = Section::find($cont->section_id);

			if($section->section_ref == 'personal'){

				$content = json_decode($cont->content);

				return $content;
			}
		}
	}


	public static function getSummaryContent($id){

		$contents = DB::table('contents')->where('resume_id', '=', $id)->get();

		foreach ($contents as $cont) {
			# code...
			$section = Section::find($cont->section_id);

			if($section->section_ref == 'summary'){

				$content = json_decode($cont->content);

				return $content;
			}
		}
	}







	public static function getEducationLevel($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->education_level;
	}


	public static function getInstitution($id){

		$content = Content::find($id);



		$cont = json_decode($content->content);

		return $cont->institution;
	}


	public static function getStartDate($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		$date=date_create($cont->start_date);
 		
 		return date_format($date, "M-Y");

		//return  date_format( strtotime($cont->start_date), 'd-M-Y'); 
	}


	public static function getEndDate($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		$date=date_create($cont->end_date);
 		
 		return date_format($date, "M-Y");
	}


	public static function getCourse($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->course;
	}

	public static function getGrade($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->grade;
	}

	//work statuc functions

	

	public static function getPosition($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->position;
	}


	public static function getSummary($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->summary;
	}


	public static function getSkill($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->skill;
	}


	public static function getSkillDescription($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->description;
	}


	public static function getRefPhone($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->phone;
	}


	public static function getRefEmail($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->email;
	}

	public static function getRefName($id){

		$content = Content::find($id);

		$cont = json_decode($content->content);

		return $cont->referee_name;
	}

}