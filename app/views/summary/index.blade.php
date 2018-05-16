@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$resume->id)}}" > CV-{{$resume->cv_ref}} </a></li>
         
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>

          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		@if($id == null)
        		
        		 <div class="col-lg-4 col-sm-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="fa fa-plus font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                       
                        <div class=" small"> You have not submitted your career summary details. Click to update this section</div>
                    
                    </div>

                  </div>
                </div>

                </a>


               

             </div>


@else
             <div class="col-sm-6 col-md-4 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    {{$section->name}}
                    <a href="{{URL::to('contents/edit/'.$id)}}" class="btn btn-primary btn-sm pull-right" >update</a>
                  </div>
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        
                        <tr>
                          <td>{{$content->summary}}</td>
                        </tr>
                        

                      </table>

                  </div>
                  
                </div>
              </div>
@endif
 
        	

        	</div>
        	
   <div>     	
<a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-primary" ><i class="fa fa-home"></i> Back to Sections</a>
</div>

        </div>




 
          




          

@stop