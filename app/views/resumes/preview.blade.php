@extends('layouts/client')
@section('content')

<div class="navbar navbar-inverse navbar-fixed-top" style="margin-top:50px; background-color:#B2BABB; border-bottom:1px solid #B2BABB; z-index:1">
            

            <ul class="nav nav-pills nav-fill text-center " >

                      <li class="nav-item ">
                        <a class="nav-link active text-muted" href="{{URL::to('resumes/show/'.$resume->id)}}" >CV EDITOR</a>
                      </li>

                      

                      <li class="nav-item">
                        <a class="nav-link text-muted" href="{{URL::to('resumes/view/'.$resume->id)}}">PREVIEW</a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link text-muted" href="{{URL::to('resumestemplates/'.$resume->id)}}">TEMPLATES</a>
                      </li>
                      
                      
                    </ul>

         
          <!-- Breadcrumb Menu-->
          
        </div>

		
		

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		

<div class="col-lg-10 col-xs-12" style="margin-top:55px; border:1px solid grey;" >

            <img src="{{asset('tmp/'.$cvname)}}" width="100%" >
</div>



        	

        	</div>
        	
        	


        </div>





         <footer class="navbar-fixed-bottom" style="background-color: #f5f5f5;">
      <div class="container" style="padding:10px;">
        <p class="text-mute">

          <div class="pull-left text-primary">
            {{$template->name}}<br/>KES {{$template->cost}}
          </div>

          
          <a href="{{URL::to('resumes/payment/'.$resume->id)}}" class="btn btn-default pull-right">Download</a>
        </p>
      </div>
    </footer>


@stop