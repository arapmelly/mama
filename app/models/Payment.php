<?php

class Payment extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public static function checkPayment($resumeid, $templateid){

		// query all payments and check if balance exists

		
		$transactionExists = DB::table('payments')->where('resume_id', '=', $resumeid)->where('template_id', '=', $templateid)->count();

		if($transactionExists >= 1){

			$template = Template::find($templateid);


			$amount_paid = DB::table('payments')->where('resume_id', '=', $resumeid)->where('template_id', '=', $templateid)->sum('amount_paid');

			if($amount_paid >= $template->cost){

				return true;
			} else {

				return false;
			}

		} else {

			return false;
		}


		
	}	



}	