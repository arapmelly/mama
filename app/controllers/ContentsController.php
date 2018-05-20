<?php

class ContentsController extends \BaseController {

	/**
	 * Display a listing of contents
	 *
	 * @return Response
	 */
	public function index()
	{
		$contents = Content::all();

		return View::make('contents.index', compact('contents'));
	}

	/**
	 * Show the form for creating a new content
	 *
	 * @return Response
	 */
	public function create($id)
	{

		

		$section = Section::findOrFail($id);

		$resumeid = Session::get('cvid');

		$resume = Resume::findOrFail($resumeid);

		if($section->section_ref == 'personal'){
			return View::make('personals.create', compact('section', 'resume'));
		}

		if($section->section_ref == 'summary'){
			return View::make('summary.create', compact('section', 'resume'));
		}


		if($section->section_ref == 'education'){
			return View::make('education.create', compact('section', 'resume'));
		}

		if($section->section_ref == 'work'){
			return View::make('work.create', compact('section', 'resume'));
		}

		if($section->section_ref == 'reference'){
			return View::make('reference.create', compact('section', 'resume'));
		}

		if($section->section_ref == 'skill'){
			return View::make('skill.create', compact('section', 'resume'));
		}

		return View::make('contents.create');
	}

	/**
	 * Store a newly created content in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Content::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		


		if (Input::hasFile('file'))
		{

			//get the name of file
			$name = Input::file('file')->getClientOriginalName();

			$extension = Input::file('file')->getClientOriginalExtension();

			//$fileName = 'tmp/'.$name;

			$destinationPath = public_path().'/tmp';

			
			
			Input::file('file')->move($destinationPath, $name);

			$data = array_add($data, 'photo', $name);

			$cont = json_encode($data);

			$content = new Content;
			$content->section_id = array_get($data, 'section_id');
			$content->resume_id = array_get($data, 'resume_id');
			$content->user_id = array_get($data, 'user_id');
			$content->content = $cont;
			$content->save();
			
			

		} else {

			$data = array_add($data, 'photo', 'null');

			$cont = json_encode($data);

			$content = new Content;
			$content->section_id = array_get($data, 'section_id');
			$content->resume_id = array_get($data, 'resume_id');
			$content->user_id = array_get($data, 'user_id');
			$content->content = $cont;
			$content->save();
		}

		

		return Redirect::to('contents/view/'.$content->section_id);
	}

	/**
	 * Display the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$content = Content::findOrFail($id);

		return View::make('contents.show', compact('content'));
	}

	/**
	 * Show the form for editing the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cont = Content::find($id);

		$section = Section::findOrFail($cont->section_id);

		$content = json_decode($cont->content);

		$resume = Resume::findOrFail($cont->resume_id);

		if($section->section_ref == 'personal'){
			return View::make('personals.edit', compact('content', 'section', 'cont', 'resume'));
		}

		if($section->section_ref == 'summary'){
			return View::make('summary.edit', compact('content', 'section', 'cont', 'resume'));
		}

		if($section->section_ref == 'education'){
			return View::make('education.edit', compact('content', 'section', 'cont', 'resume'));
		}

		if($section->section_ref == 'work'){
			return View::make('work.edit', compact('content', 'section', 'cont', 'resume'));
		}

		if($section->section_ref == 'skill'){
			return View::make('skill.edit', compact('content', 'section', 'cont', 'resume'));
		}
		
		if($section->section_ref == 'reference'){
			return View::make('reference.edit', compact('content', 'section', 'cont', 'resume'));
		}
	}

	/**
	 * Update the specified content in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$content = Content::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Content::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Input::hasFile('file'))
		{

			//get the name of file
			$name = Input::file('file')->getClientOriginalName();

			$extension = Input::file('file')->getClientOriginalExtension();

			//$fileName = 'tmp/'.$name;

			$destinationPath = public_path().'/tmp';

			
			
			$upload = Input::file('file')->move($destinationPath, $name);

			Log::info("This will UPLOAD: ".$upload);

			$data = array_add($data, 'photo', $name);

			$cont = json_encode($data);

	
			$content->section_id = array_get($data, 'section_id');
			$content->resume_id = array_get($data, 'resume_id');
			$content->user_id = array_get($data, 'user_id');
			$content->content = $cont;
			$content->update();
			
			

		} else {

			$data = array_add($data, 'photo', 'null');
			
			$cont = json_encode($data);

			
			$content->section_id = array_get($data, 'section_id');
			$content->resume_id = array_get($data, 'resume_id');
			$content->user_id = array_get($data, 'user_id');
			$content->content = $cont;
			$content->update();
		}

		return Redirect::to('contents/view/'.$content->section_id);
	}

	/**
	 * Remove the specified content from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$cont = Content::find($id);

		$section = Section::findOrFail($cont->section_id);

		Content::destroy($id);

		return Redirect::to('contents/view/'.$section->id);
	}
 

	public function view($id){

		$section = Section::findOrFail($id);

		$resumeid = Session::get('cvid');

		$resume = Resume::findOrFail($resumeid);
		

		if ($section->section_ref == 'personal'){

			$personalid = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($personalid == null){
				

				return View::make('personals.index', compact('section', 'resume', 'personalid'));

			} else {

				$cont = Content::findOrFail($personalid);

				$content = json_decode($cont->content);

				return View::make('personals.index', compact('section', 'resume', 'content', 'personalid'));
			}
			

			
		}


		// summary section 

		if ($section->section_ref == 'summary'){

			$id = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($id == null){
				

				return View::make('summary.index', compact('section', 'resume', 'id'));

			} else {

				$cont = Content::findOrFail($id);

				$content = json_decode($cont->content);

				

				return View::make('summary.index', compact('section', 'resume', 'content', 'id', 'cont'));
			}
			

			
		}



		// work section 

		if ($section->section_ref == 'work'){

			$id = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($id == null){
					
				$conts = array();
				return View::make('work.index', compact('section', 'resume', 'id', 'conts'));

			} else {

				$conts = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->get();


				$cont = Content::findOrFail($id);

				$content = json_decode($cont->content);

				return View::make('work.index', compact('section', 'resume', 'content', 'id', 'conts'));
			}
			

			
		}


		// education section 

		if ($section->section_ref == 'education'){

			$id = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($id == null){
				
				$conts = array();
				return View::make('education.index', compact('section', 'resume', 'id', 'conts'));

			} else {

				$conts = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->get();

				$cont = Content::findOrFail($id);

				$content = json_decode($cont->content);

				return View::make('education.index', compact('section', 'resume', 'content', 'id', 'conts'));
			}
			

			
		}


		// skill section 

		if ($section->section_ref == 'skill'){

			$id = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($id == null){
				
				$conts = array();

				return View::make('skill.index', compact('section', 'resume', 'id', 'conts'));

			} else {

				$conts = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->get();

				$cont = Content::findOrFail($id);

				$content = json_decode($cont->content);

				return View::make('skill.index', compact('section', 'resume', 'content', 'id', 'conts'));
			}
			

			
		}


		// refrence section 

		if ($section->section_ref == 'reference'){

			$id = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->pluck('id');

			if($id == null){
				
				$conts = array();
				return View::make('reference.index', compact('section', 'resume', 'id', 'conts'));

			} else {
				$conts = DB::table('contents')->where('resume_id', '=', $resume->id)->where('section_id', '=', $section->id)->get();

				$cont = Content::findOrFail($id);

				$content = json_decode($cont->content);

				return View::make('reference.index', compact('section', 'resume', 'content', 'id', 'conts'));
			}
			

			
		}


	}



	public function nextsection($id){

		$next = Section::where('id', '>', $id)->orderBy('id','asc')->first();

		return Redirect::to('contents/view/'.$next->id);
	}
}
