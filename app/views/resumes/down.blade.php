@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes')}}"> Resumes</a></li>

         <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}">CV-{{$resume->cv_ref}}</a></li>
          
         
         
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('resumes/download/'.$template->id)}}" style="text-decoration:none">
<div class="card ">
                  
                    
                    
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">CV-{{$resume->cv_ref}}</div>

                        <div class=" small">Level : {{ Level::getLevelName($resume->level_id)}} </div>

                        <div class=" small">Created : {{$resume->created_at}} </div>
                        <hr>
                        <div>
                          <a href="{{URL::to('resumes/download/'.$resume->id)}}" class="btn btn-primary">Download</a>
                        </div>
                        
                    
                    </div>

                
                </div>

</a>

</div>


        	

        	</div>
        	
        	


        </div>

@stop