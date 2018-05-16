@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('sections')}}"> Sections</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          <a href="{{URL::to('sections/create')}}" class="breadcrumb-menu btn btn-primary">New Section</a>
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($sections as $section)

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('sections/edit/'.$section->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="icon icon-list font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$section->name}}</div>

                        <div class=" small">{{$section->description}} </div>
                        <div class=" small">{{$section->section_ref}} </div>
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop