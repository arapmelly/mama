<?php

class SectionsController extends \BaseController {

	/**
	 * Display a listing of sections
	 *
	 * @return Response
	 */
	public function index()
	{
		$sections = Section::all();

		return View::make('sections.index', compact('sections'));
	}

	/**
	 * Show the form for creating a new section
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sections.create');
	}

	/**
	 * Store a newly created section in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Section::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$section = new Section;
		$section->name = array_get($data, 'name');
		$section->description = array_get($data, 'description');
		$section->section_ref = array_get($data, 'section_ref');
		$section->save();

		return Redirect::route('sections.index');
	}

	/**
	 * Display the specified section.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$section = Section::findOrFail($id);

		return View::make('sections.show', compact('section'));
	}

	/**
	 * Show the form for editing the specified section.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$section = Section::find($id);

		return View::make('sections.edit', compact('section'));
	}

	/**
	 * Update the specified section in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$section = Section::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Section::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$section->name = array_get($data, 'name');
		$section->description = array_get($data, 'description');
		$section->section_ref = array_get($data, 'section_ref');
		$section->update();

		return Redirect::route('sections.index');
	}

	/**
	 * Remove the specified section from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Section::destroy($id);

		return Redirect::route('sections.index');
	}

}
