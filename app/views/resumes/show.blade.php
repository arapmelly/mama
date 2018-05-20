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

		
	

		





        <div class="container-fluid" style="margin-top:60px;">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($sections as $section)

<div class="col-lg-6 col-xs-12" style="padding:10px;">

<a href="{{URL::to('contents/view/'.$section->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                    @if(Resume::contentExist($section->id, $resume->id))  
                    <div class="bg-success p-5 d-flex mr-2 ">
                      @else
                      <div class="bg-primary p-5 d-flex mr-2 ">
                      @endif
                        

                    </div>
                    
                    
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$section->name}}</div>

                        <div class=" small">{{$section->description}} </div>
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop