@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('sections')}}"> Sections</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
        </ol>

		



        <div class="container-fluid">


          <div class="row">

            <div class="col-lg-5 col-xs-12" style="padding:10px;">

<a href="{{URL::to('sections/create')}}" style="text-decoration:none">
<div class="card">
                  
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">Create a new section</div>

                       
                    
                    </div>

                  
                </div>

</a>

</div>

          </div>


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($sections as $section)

<div class="col-lg-5 col-xs-12" style="padding:10px;">

<a href="{{URL::to('sections/edit/'.$section->id)}}" style="text-decoration:none">
<div class="card">
                  
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$section->name}}</div>

                        <div class=" small">{{$section->description}} </div>
                        
                    
                    </div>

                  
                </div>

</a>

</div>
@endforeach


        	

        	</div>
        	
        	


        </div>

@stop