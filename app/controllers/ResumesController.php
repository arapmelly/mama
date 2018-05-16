<?php

class ResumesController extends \BaseController {

	/**
	 * Display a listing of resumes
	 *
	 * @return Response
	 */
	public function index()
	{
		$resumes = DB::table('resumes')->where('user_id', '=', Confide::user()->id)->get();

		return View::make('resumes.index', compact('resumes'));
	}

	/**
	 * Show the form for creating a new resume
	 *
	 * @return Response
	 */
	public function create()
	{
		$levels = Level::all();

		return View::make('resumes.create', compact('levels'));
	}

	/**
	 * Store a newly created resume in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Resume::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Resume::create($data);

		return Redirect::route('resumes.index');
	}

	/**
	 * Display the specified resume.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$resume = Resume::findOrFail($id);

		$sections = Section::all();

		Session::put('cv', $resume->id);

		return View::make('resumes.show', compact('resume', 'sections'));
	}

	/**
	 * Show the form for editing the specified resume.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$resume = Resume::find($id);

		return View::make('resumes.edit', compact('resume'));
	}

	/**
	 * Update the specified resume in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$resume = Resume::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Resume::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$resume->update($data);

		return Redirect::route('resumes.index');
	}

	/**
	 * Remove the specified resume from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Resume::destroy($id);

		return Redirect::route('resumes.index');
	}



	public function init($id)
	{

		$last_ref = DB::table('resumes')->orderBy('id', 'desc')->pluck('cv_ref');

		if($last_ref != null){
			$new_ref = $last_ref + 1;
		} else {
			$new_ref = 1200;
		}
		

		$cv = new Resume;
		$cv->level_id = $id;
		$cv->user_id = Confide::user()->id;
		$cv->cv_ref = $new_ref;
		$cv->save();

		Session::put('cv', $cv);

		return Redirect::to('resumes/show/'.$cv->id);
	}


	public function preview($id){

		$resume = Resume::findOrFail($id);

		Session::put('resumeid', $resume->id);

		$templates = Template::all();

		return View::make('resumes.templates', compact('resume', 'templates'));
	}



	public function down($id){

		$template = Template::findOrFail($id);

		$resumeid = Session::get('resumeid');

		$resume = Resume::findOrFail($resumeid);


		return View::make('resumes.down', compact('resume', 'template'));
	}


	public function view($id){

		$template = Template::findOrFail($id);

		$resumeid = Session::get('resumeid');

		

		$sections = Section::all();


		$resume = Resume::findOrFail($resumeid);

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
		

		return View::make('resumes.preview', compact('resume', 'template', 'sections', 'personal', 'summary', 'works', 'work_section_id', 'education_section_id', 'educations', 'skill_section_id', 'skills', 'referees', 'referee_section_id'));
	}

	public function checkpayment($id){

		$template = Template::findOrFail($id);

		$resumeid = Session::get('resumeid');

		$resume = Resume::findOrFail($resumeid);

		$payment = Payment::checkPayment($resumeid, $template->id);

		if($payment){
			return Redirect::to('resumes/download/'.$template->id);
		} else {
			return Redirect::to('payments/create/'.$template->id);
		}

	}

	public function download($id){

		$template = Template::findOrFail($id);

		$resumeid = Session::get('resumeid');

		$resume = Resume::findOrFail($resumeid);

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
		


		//$data = array($personal, $template);

		$pdf = PDF::loadView('themes.download', 
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
    	return $pdf->download('CV.pdf');
	}
}
