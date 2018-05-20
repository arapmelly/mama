@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">

      <!-- Breadcrumb Menu-->
          <a href="{{URL::to('templates/create')}}" class=" btn btn-xs btn-default pull-right">New Template</a>
          
          <li class="breadcrumb-item"><a href="{{URL::to('templates')}}"> Templates</a></li>
         
         
         
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($templates as $template)

<div class="col-lg-5 col-sm-12" style="padding:10px;">

<a href="{{URL::to('templates/show/'.$template->id)}}" style="text-decoration:none">
<div class="card ">
                 
                      
                   
                    
                    
                    <div class="card-body">
                        
                        <div class="card-img" style="background-color:#d5d8dc">
                    <img src="{{'img/temps/'.$template->thumb}}" width="100%" style="padding:30px;">
                  </div>

                        <div class=" font-weight-bold text-primary text-uppercase">{{$template->name}}</div>

                        <div class=" small">KES {{$template->cost}} </div>

                        <div class=" small"> {{ strtoupper($template->layout)}} </div>
                    
                    </div>

                 
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop