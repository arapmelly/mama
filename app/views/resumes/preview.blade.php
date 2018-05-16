@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}">CV-{{$resume->cv_ref}}</a></li>
          
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/preview/'.$resume->id)}}">Themes</a></li>
         
          <li class="breadcrumb-item"><a href="{{URL::to('resumes/view/'.$template->id)}}"> {{$template->name}}</a></li>
          
            
            <a href="{{URL::to('resumes/payment/'.$template->id)}}" class="breadcrumb-menu btn btn-primary btn-sm">Download CV</a>
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		

<div class="col-md-10 col-sm-12">

             @if($template->layout == 'stylish')
              
              @include('themes/stylish')

            @elseif($template->layout == 'default')

              @include('themes/default')

            @elseif($template->layout == 'mono')

              @include('themes/mono')

            @elseif($template->layout == 'swiss')

              @include('themes/swiss')

            @endif

</div>



        	

        	</div>
        	
        	


        </div>

@stop