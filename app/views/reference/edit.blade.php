@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$resume->id)}}" > CV-{{$resume->cv_ref}} </a></li>
         
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>


          <li class="breadcrumb-item "><a href="{{URL::to('contents/create/'.$section->id)}}" >Edit</a></li>
          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		



             <div class="col-sm-6 col-md-4 col-xs-12">
                <div class="card">
                  <form action="{{URL::to('contents/update/'.$cont->id)}}" method="post">
                  <div class="card-body">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">

                  
                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Referee Name <span style="color:red">*</span></label>
                    <input type="text" name="referee_name" class="form-control" value="{{$content->referee_name}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Company <span style="color:red">*</span></label>
                    <input type="text" name="institution" class="form-control" value="{{$content->institution}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Position <span style="color:red">*</span></label>
                    <input type="text" name="position" class="form-control" value="{{$content->position}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Phone Number <span style="color:red">*</span></label>
                    <input type="text" name="phone" class="form-control" value="{{$content->phone}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Email Address <span style="color:red">*</span></label>
                    <input type="text" name="email" class="form-control" value="{{$content->email}}" required>
                    </div>
                  </div>

                 

                  
                  
                 


                  </div>

                  <div class="card-footer">
                    
                    <button type="submit" class="btn btn-primary " >Update</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>




 
         

@stop