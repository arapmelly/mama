@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$cont->resume_id)}}" > CV-{{$resume->cv_ref}} </a></li>
          

          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>

          <li class="breadcrumb-item "><a href="{{URL::to('contents/edit/'.$cont->id)}}" >Update</a></li>

          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		



             <div class="col-sm-6 col-md-4 col-xs-12">
                <div class="card">
                  <form action="{{URL::to('contents/update/'.$cont->id)}}" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$cont->resume_id}}">

                  <input type="hidden" name="user_id" value="{{$cont->user_id}}">
                  
                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
            
                    <input type="text" name="fullname" class="form-control" value="{{$content->fullname}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="phone" class="form-control" value="{{$content->phone}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="email" class="form-control" value="{{$content->email}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="nationality" class="form-control" value="{{$content->nationality}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="career_label" class="form-control" value="{{$content->career_label}}">
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class="col-sm-12 ">
                    <label>Photo</label>
                    <input type="file" name="file" >
                    </div>
                  </div>


                  </div>

                  <div class="card-footer">
                    
                    <button type="submit" class="btn btn-primary  " >Update</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>









          

@stop