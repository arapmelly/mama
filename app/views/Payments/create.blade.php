@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}">CV-{{$resume->cv_ref}}</a></li>
          
          
           
          <li class="breadcrumb-item"><a href="{{URL::to('payments/create/'.$template->id)}}">Payment</a></li>
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-md-4 col-sm-12">
        		
        		
                    <div class="car">

                      <div class="card-header">MPESA PAYMENT</div>
                        <div class="card-bod">
                            


                              <form action="{{URL::to('payments')}}" method="post" class="form-horizontal">

                                <input type="hidden" name="resume_id" value="{{$resume->id}}">
                                <input type="hidden" name="template_id" value="{{$template->id}}">
                                <input type="hidden" name="cost" value="{{$template->cost}}">

        <div class="card-body ">

        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert alert-success">{{{ Session::get('notice') }}}</div>
        @endif

          <p>Follow the steps below to pay using M-Pesa</p>
          <ul>
            <li>Go to <b>M-PESA Menu</b> on your phone</li>
            <li>Select <b>Pay Bill</b> (under the <b>Lipa Na M-Pesa</b>)</li>
            <li>Enter Business Number - <b>961700</b></li>
            <li>Enter Account Number - <b>13464</b></li>
            <li>Enter Amount - <b>{{$template->cost}}</b></li>
            <li>Enter your <b>M-PESA PIN</b></li>
            <li>Send and wait for SMS receipt from <b>LIPISHA</b></li>
          </ul>

            <div class="form-group row ">
              <div class="col-sm-12 ">
                <label>MPESA CODE</label>
                <input type="text" name="transaction_code" class="form-control" required>
              </div>
            </div>
           
            
            <div class="small text-muted"><small>*powered by LIPISHA</small></div>

            

           
          
           




                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Confirm Payment</button>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop