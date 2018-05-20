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
            

        		



             <div class="col-lg-4 col-xs-12" >
                <div class="cad">
                  <form action="{{URL::to('contents/update/'.$cont->id)}}" method="post">
                  <div class="card-bdy">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">

                 

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Skill <span style="color:red">*</span></label>
                    <input type="text" name="skill" class="form-control" value="{{$content->skill}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                    <label>Description </label>
                    <textarea name="description" class="form-control">{{$content->description}}</textarea>
                    </div>
                  </div>

                  
                  
                 


                  </div>

                  <div class="card-fooer">
                    
                    <button type="submit" class="btn btn-primary " >Update</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>




 
         

@stop