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

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		@if($personalid == null)
        		
        		 <div class="col-lg-4 col-sm-12">

                

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
             <div class="col-sm-6 col-md-4 col-xs-12">
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

                  <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$resume->id}}">

                  <input type="hidden" name="user_id" value="{{$resume->user_id}}">
                  
                  <div class="form-group row ">
                    <div class="col-md-6 col-sm-12 ">
            
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name*" required>
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

@stop