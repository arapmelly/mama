@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$resume->id)}}" > CV </a></li>
         
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>

          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		@if($personalid == null)
        		
        		 <div class="col-lg-12 col-xs-12">

                

                  <a href="#" data-toggle="modal" data-target="#create" style="text-decoration:none">
                    <div class="card">
                    <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="fa fa-plus font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                       
                        <div class=" small"> You have not submitted your personal details. Click to update your personal information</div>
                    
                    </div>

                  </div>
                </div>

                </a>


               

             </div>


@else
             <div class="col-lg-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    {{$section->name}}
                    <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#update">update</button>
                  </div>
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        <tr>
                          <td>Name</td><td>{{$personal->fullname}}</td>
                        </tr>
                        <tr>
                          <td>Email</td><td>{{$personal->email}}</td>
                        </tr>
                        <tr>
                          <td>Phone</td><td>{{$personal->phone}}</td>
                        </tr>
                        <tr>
                          <td>Nationality</td><td>{{$personal->nationality}}</td>
                        </tr>
                        <tr>
                          <td>Job Title</td><td>{{$personal->career_label}}</td>
                        </tr>

                      </table>

                  </div>
                  
                </div>
              </div>
@endif
 
        	

        	</div>
        	
        	


        </div>




 
         

@stop