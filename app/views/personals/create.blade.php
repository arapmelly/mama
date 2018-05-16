@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$resume->id)}}" > CV-{{$resume->cv_ref}} </a></li>
         
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>


          <li class="breadcrumb-item "><a href="{{URL::to('contents/create/'.$section->id)}}" >Create</a></li>
          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		



             <div class="col-sm-6 col-md-4 col-xs-12">
                <div class="card">
                  <form action="{{URL::to('contents')}}" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">
                  
                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
            
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name*" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number*" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="email" class="form-control" placeholder="Email Address*" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality*" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class="col-sm-12 ">
                
                    <input type="text" name="career_label" class="form-control" placeholder="Job Title">
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
                    
                    <button type="submit" class="btn btn-primary " >Save</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>




 
          <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$section->name}}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{URL::to('contents/update/')}}" method="post">
                <div class="modal-body">

                  <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">
                  
                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
            
                    <input type="text" name="fullname" class="form-control" value="" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
                
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number*" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
                
                    <input type="text" name="email" class="form-control" placeholder="Email Address*" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
                
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality*" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
                
                    <input type="text" name="career_label" class="form-control" placeholder="Job Title">
                    </div>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save </button>

                </div>

                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->





          <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$section->name}}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{URL::to('contents')}}" method="post">
                <div class="modal-body">

                  


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save </button>

                </div>

                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

@stop