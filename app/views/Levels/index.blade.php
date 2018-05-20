@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('levels')}}"> Levels</a></li>
         
         
         
         
          
        </ol>

		



        <div class="container-fluid">


            <div class="row">
<div class="col-lg-5 col-xs-12" style="padding:10px">

<a href="{{URL::to('levels/create/')}}" style="text-decoration:none">
<div class="card ">
                      
                    
                    
                    
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">Create Level</div>

                        <div class=" small">Click here to create a new level </div>
                    
                    </div>

                  
                </div>

</a>

</div>

</div>
<hr>


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@include('cards/levels')
        	

        	</div>
        	
        	


        </div>

@stop