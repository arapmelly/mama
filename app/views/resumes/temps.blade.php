@extends('layouts/client')
@section('content')
		
		    <ol class="breadcrumb">
          
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}"> CV-{{$resume->cv_ref}}</a></li>
          
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/preview/'.$resume->id)}}"> Templates</a></li>
         
         
         
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($templates as $template)

<div class="col-lg-3 col-xs-12" style="padding:10px">

<a href="{{URL::to('resumes/settemp/'.$template->id)}}" style="text-decoration:none">
<div class="card ">
                  
                    
                    
                    <div class="card-body">
                        
                        <div class="card-img" style="background-color:#d5d8dc">
                          
                    <img src="{{asset('img/temps/'.$template->thumb)}}" width="100%" style="padding:10px;">
                  </div>
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$template->name}}</div>

                        <div class=" small">Layout : {{ $template->layout }} </div>

                        <div class=" small">Cost : {{$template->cost}} </div>

                        
                    
                    </div>

                  
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop