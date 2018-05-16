@extends('layouts/client')
@section('content')
		
		    <ol class="breadcrumb">
          
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}"> CV-{{$resume->cv_ref}}</a></li>
          
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/preview/'.$resume->id)}}"> CV Themes</a></li>
         
         
         
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($templates as $template)

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('resumes/view/'.$template->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="fa fa-file font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$template->name}}</div>

                        <div class=" small">Layout : {{ $template->layout }} </div>

                        <div class=" small">Cost : {{$template->cost}} </div>

                        
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop