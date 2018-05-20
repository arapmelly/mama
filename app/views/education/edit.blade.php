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
            

        		



             <div class="col-lg-5 col-xs-12">
                <div class="car">
                  <form action="{{URL::to('contents/update/'.$cont->id)}}" method="post">
                  <div class="card-bod">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">

                  <input type="hidden" name="education_level" value="{{$content->education_level}}">


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Institution <span style="color:red">*</span></label>
                    <input type="text" name="institution" class="form-control" value="{{$content->institution}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Start Date <span style="color:red">*</span></label>
                    <input type="date" name="start_date" class="form-control" value="{{$content->start_date}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>End Date <span style="color:red">*</span></label>
                    <input type="date" name="end_date" class="form-control" value="{{$content->end_date}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Course <span style="color:red">*</span></label>
                    <input type="text" name="course" class="form-control" value="{{$content->course}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Grade <span style="color:red">*</span></label>
                    <input type="text" name="grade" class="form-control" value="{{$content->grade}}" required>
                    </div>
                  </div>

                  
                  
                 


                  </div>

                  <div class="card-foote">
                    
                    <button type="submit" class="btn btn-primary " >Update</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>




 
         

@stop