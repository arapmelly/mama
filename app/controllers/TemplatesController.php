<?php

class TemplatesController extends \BaseController {

	/**
	 * Display a listing of templates
	 *
	 * @return Response
	 */
	public function index()
	{
		$templates = Template::all();

		return View::make('templates.index', compact('templates'));
	}

	/**
	 * Show the form for creating a new template
	 *
	 * @return Response
	 */
	public function create()
	{
		$layouts = Icon::layouts();
		return View::make('templates.create', compact('layouts'));
	}

	/**
	 * Store a newly created template in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Template::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$template = new Template;
		$template->name = array_get($data, 'name');
		$template->cost = array_get($data, 'cost');
		$template->layout = array_get($data, 'layout');
		$template->save();

		return Redirect::route('templates.index');
	}

	/**
	 * Display the specified template.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$template = Template::findOrFail($id);

		$res = DB::table('resumes')->first();

		$resumeid = $res->id;

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
		

		return View::make('templates.show', compact('resume','template', 'sections', 'personal', 'summary', 'works', 'work_section_id', 'education_section_id', 'educations', 'skill_section_id', 'skills', 'referees', 'referee_section_id'));

		

		//return View::make('templates.show', compact('template','personal'));
	}

	/**
	 * Show the form for editing the specified template.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$template = Template::find($id);
		$layouts = Icon::layouts();

		return View::make('templates.edit', compact('template', 'layouts'));
	}

	/**
	 * Update the specified template in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$template = Template::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Template::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		
		
		$template->border_top_type = array_get($data, 'border_top_type');
		$template->border_top_size = array_get($data, 'border_top_size');
		$template->border_top_color = array_get($data, 'border_top_color');
		$template->border_bottom_type = array_get($data, 'border_bottom_type');
		$template->border_bottom_color = array_get($data, 'border_bottom_color');
		$template->border_bottom_size = array_get($data, 'border_bottom_size');
		$template->border_left_type = array_get($data, 'border_left_type');
		$template->border_left_color = array_get($data, 'border_left_color');
		$template->border_left_size = array_get($data, 'border_left_size');
		$template->border_right_type = array_get($data, 'border_right_type');
		$template->border_right_color = array_get($data, 'border_right_color');
		$template->border_right_size = array_get($data, 'border_right_size');
		$template->text_body_color = array_get($data, 'text_body_color');
		$template->text_body_fontsize = array_get($data, 'text_body_fontsize');
		$template->text_body_fontfamily = array_get($data, 'text_body_fontfamily');
		$template->text_body_fontweight = array_get($data, 'text_body_fontweight');
		$template->text_header_color = array_get($data, 'text_header_color');
		$template->text_header_fontsize = array_get($data, 'text_header_fontsize');
		$template->text_header_fontfamily = array_get($data, 'text_header_fontfamily');
		$template->text_header_fontweight = array_get($data, 'text_header_fontweight');
		$template->update();

		return Redirect::to('templates/show/'.$template->id);
	}

	/**
	 * Remove the specified template from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Template::destroy($id);

		return Redirect::route('templates.index');
	}


	public function thumb($id){

		$template =  Template::find($id);
		//generate the thumbnail
		//get resume and resume contents from db
		$timestamp = strtotime(date('d-m-Y h:m:s'));
		$thumb_name = $template->name.'-'.$timestamp.'.png';

		

		$template->thumb = $thumb_name;
		$template->update();

		$cc = Resume::thumb($id, $thumb_name);



		return Redirect::back();
	}

}
