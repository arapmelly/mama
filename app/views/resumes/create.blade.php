@extends('layouts/site')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes')}}"> Resumes</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/create')}}"> Levels</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container">

          <div class="row">

            <div class="col-lg-12 col-xs-12">
              <blockquote class="text-muted">Click on one of the academic levels below to get started. This will enable us to provide you with relevant templates and tips</blockquote>
            </div>

          </div>

        	<!-- the main card which is resume card -->
        	<div class="row">

        		
      @foreach($levels as $level)

        <div class="col-lg-6 col-xs-12" style="padding:10px;">

            <a href="{{URL::to('resumes/init/'.$level->id)}}" style="text-decoration:none">
              <div class="card ">
                  <div class="card-body  align-items-center ">
                       <div class=" font-weight-bold text-primary text-uppercase">{{$level->name}}</div>
                       <div class=" small">{{$level->description}} </div>
                  </div>
              </div>

            </a>

        </div>
      @endforeach


                   

        	</div>
        	
        	


        </div>

@stop