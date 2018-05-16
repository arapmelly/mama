@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('payments')}}"> Payments</a></li>
         
         
         
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		@if(count($payments) < 1)

              <div class="alert alert-warning">
                  There are no payments at the moment
              </div>

            @endif
        		
        		@foreach($payments as $payment)

<div class="col-md-4 col-sm-12">

<a href="#" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                      
                    
                    
                    
                    <div class="" style="padding:20px;">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">CV-{{ Resume::getCVRef($payment->resume_id)}}</div>

                        <div class=" small">Template : {{ Template::getTempName($payment->template_id)}} </div>

                        <div class=" small">Cost : {{$payment->cost}} </div>
                        <hr>
                         <div class=" small">Amount Paid : {{$payment->amount_paid}} </div>

                         <div class=" small">Transaction Code : {{$payment->transaction_code}} </div>
                         <hr>
                         <div class=" small">Client : {{$payment->username}} </div>


                          <div class=" small">Client Phone: {{$payment->phone_number}} </div>

                        
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop