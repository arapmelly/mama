<?php

class PaymentsController extends \BaseController {

	/**
	 * Display a listing of payments
	 *
	 * @return Response
	 */
	public function index()
	{
		$payments = Payment::all();

		return View::make('payments.index', compact('payments'));
	}

	/**
	 * Show the form for creating a new payment
	 *
	 * @return Response
	 */
	public function create($id)
	{

		$resume = Resume::findOrFail($id);

		$template = Template::find($resume->template_id);

		

		

		return View::make('payments.create', compact('template', 'resume'));
	}

	/**
	 * Store a newly created payment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Payment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


		$resume_id = array_get($data, 'resume_id');

		$transaction_code = array_get($data, 'transaction_code');


		$balance = Lipisha::confirmTransaction($transaction_code);

		if($balance->status->status == 'FAIL'){
			return Redirect::back()->with('error', $balance->status->status_description);
			
		}


		if($balance->status->status == 'SUCCESS'){

			//create a new transaction entry

			$payment = new Payment;
			$payment->resume_id = array_get($data, 'resume_id');
			$payment->template_id = array_get($data, 'template_id');
			$payment->cost = array_get($data, 'cost');
			$payment->date_paid = $balance->content->transaction_date;
			$payment->amount_paid = $balance->content->transaction_amount;
			$payment->channel = 'mpesa';
			$payment->transaction_code = $balance->content->transaction;
			$payment->phone_number = $balance->content->transaction_mobile_number;
			$payment->username = $balance->content->transaction_name;
			$payment->save();

			return Redirect::to('resumes/down/'.$resume_id);
		} 
		//Payment::create($data);

		
	}

	/**
	 * Display the specified payment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$payment = Payment::findOrFail($id);

		return View::make('payments.show', compact('payment'));
	}

	/**
	 * Show the form for editing the specified payment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$payment = Payment::find($id);

		return View::make('payments.edit', compact('payment'));
	}

	/**
	 * Update the specified payment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$payment = Payment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Payment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$payment->update($data);

		return Redirect::route('payments.index');
	}

	/**
	 * Remove the specified payment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Payment::destroy($id);

		return Redirect::route('payments.index');
	}

}
