@extends('layouts/site')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/.$resume->id')}}"> CV-{{$resume->cv_ref}}</a></li>
         
         
         <li class="breadcrumb-item"><a href="{{URL::to('templates')}}"> Templates</a></li>
         
          
        </ol>

		



        <div class="container">

          <div class="row">

            <div class="col-lg-6 col-xs-12">
              <blockquote class="text-muted">Choose one of our templates that pleases you</blockquote>
            </div>

          </div>


        	<!-- the main card which is resume card -->
        	<div class="row">

        		


        		
        	 @foreach($templates as $temp)

<div class="col-lg-6 col-xs-12" style="padding:10px;">




        <a href="{{URL::to('resumes/settemplates/'.$temp->id)}}" style="text-decoration:none">
            
            <div class="card" >
                 <div class="card-body  align-items-center ">
                  <div class="card-img" style="background-color:#d5d8dc">
                    <img src="{{asset('img/temps/'.$temp->thumb)}}" width="100%" style="padding:30px;">
                  </div>
                  <div class="font-weight-bold text-primary text-uppercase">{{$temp->name}}</div>
                  <div class="small">Cost : KES {{ $temp->cost}} </div>
                  <div class="small">Design : {{$temp->layout}} </div>
                </div>
            </div>

        </a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop