@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('resumes')}}"> CVs</a></li>

          <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}" >CV-{{$resume->cv_ref}}</a></li>
          

         <li class="breadcrumb-item"><a href="{{URL::to('resumes/show/'.$resume->id)}}" > Sections</a></li>
          
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		
<ol class="breadcrumb" style="margin-top:-24px">
            

            <ul class="nav nav-pills nav-fill text-center ">

                      <li class="nav-item ">
                        <a class="nav-link active" href="{{URL::to('resumes/show/'.$resume->id)}}">CV EDITOR</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('resumes/preview/'.$resume->id)}}">CV PREVIEW</a>
                      </li>
                      
                      
                    </ul>

         
          <!-- Breadcrumb Menu-->
          
        </ol>




        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@foreach($sections as $section)

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('contents/view/'.$section->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                    @if(Resume::contentExist($section->id, $resume->id))  
                    <div class="bg-success p-5 d-flex mr-2 ">
                      @else
                      <div class="bg-primary p-5 d-flex mr-2 ">
                      @endif
                        <span class="text-center">
                          <i class="icon icon-list font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
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