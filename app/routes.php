<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	if(Confide::user()){
		return Redirect::to('dashboard');
	} else {
		return Redirect::to('users/login');
	}
	
});


Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


Route::group(array('before' => 'auth'), function()
{

Route::get('dashboard', function(){

	if(Confide::user()->user_type == 'admin'){
		return Redirect::to('admin');
	}elseif(Confide::user()->user_type == 'client'){
		return Redirect::to('client');
	} else {
		return Redirect::to('users/login');
	}

});



Route::get('admin', function(){

	$resumes = Resume::all();

	return View::make('hello', compact('resumes'));
});


Route::get('client', function(){

	$resumes = DB::table('resumes')->where('user_id', '=', Confide::user()->id)->get();

	return View::make('resumes.index', compact('resumes'));
});


Route::get('pdf', function(){

	return PDF::loadFile('http://www.github.com')->stream('github.pdf');

});


Route::get('payment', function(){

	

	$balance = Lipisha::confirmTransaction('TX98089890');
	//echo $balance->status->status;
	print_r($balance);
});



//

// Confide routes




//Level Routes
Route::resource('levels', 'LevelsController');
Route::get('levels/edit/{id}', 'LevelsController@edit');
Route::post('levels/update/{id}', 'LevelsController@update');
Route::get('levels/delete/{id}', 'LevelsController@destroy');


Route::resource('sections', 'SectionsController');
Route::get('sections/edit/{id}', 'SectionsController@edit');
Route::post('sections/update/{id}', 'SectionsController@update');
Route::get('sections/delete/{id}', 'SectionsController@destroy');

Route::resource('templates', 'TemplatesController');
Route::get('templates/edit/{id}', 'TemplatesController@edit');
Route::post('templates/update/{id}', 'TemplatesController@update');
Route::get('templates/delete/{id}', 'TemplatesController@destroy');
Route::get('templates/show/{id}', 'TemplatesController@show');
Route::get('templates/thumb/{id}', 'TemplatesController@thumb');

Route::resource('resumes', 'ResumesController');
Route::get('resumes/edit/{id}', 'ResumesController@edit');
Route::post('resumes/update/{id}', 'ResumesController@update');
Route::get('resumes/delete/{id}', 'ResumesController@destroy');
Route::get('resumes/show/{id}', 'ResumesController@show');
Route::get('resumes/init/{id}', 'ResumesController@init');
Route::get('resumes/preview/{id}', 'ResumesController@preview');
Route::get('resumes/view/{id}', 'ResumesController@view');
Route::get('resumes/payment/{id}', 'ResumesController@checkpayment');
Route::get('resumes/download/{id}', 'ResumesController@download');
Route::get('resumes/down/{id}', 'ResumesController@down');
Route::get('resumestemplates/{id}', 'ResumesController@templates');
Route::get('resumes/settemplates/{id}', 'ResumesController@settemplate');
Route::get('resumes/settemp/{id}', 'ResumesController@settemp');



Route::resource('contents', 'ContentsController');
Route::get('contents/edit/{id}', 'ContentsController@edit');
Route::post('contents/update/{id}', 'ContentsController@update');
Route::get('contents/delete/{id}', 'ContentsController@destroy');
Route::get('contents/show/{id}', 'ContentsController@show');
Route::get('contents/view/{id}', 'ContentsController@view');
Route::get('contents/create/{id}', 'ContentsController@create');
Route::get('contents/nextsection/{id}', 'ContentsController@nextsection');


Route::resource('payments', 'PaymentsController');
Route::get('payments/confirm/{id}', 'PaymentsController@confirm');
Route::get('payments/create/{id}', 'PaymentsController@create');

});