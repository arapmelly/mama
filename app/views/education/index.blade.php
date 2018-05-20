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
            

        		
        		
        		 <div class="col-lg-4 col-sm-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    
                    
                    
                    <div class="card-body">
                        
                        
                       
                        <div class=" small"> Click to add your education history</div>
                    
                    </div>

                  
                </div>

                </a>


               <hr>

             </div>




@foreach($conts as $cont)
             <div class="col-lg-5  col-xs-12" style="padding:10px;">
                <div class="card">
                  
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        
                        
                        <tr>
                          <td>Institution</td><td>{{Content::getInstitution($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>Start Date</td><td>{{Content::getStartDate($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>End Date</td><td>{{Content::getEndDate($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>Course</td><td>{{Content::getCourse($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>Grade</td><td>{{Content::getGrade($cont->id)}}</td>
                        </tr>
                        

                      </table>

                  </div>


                  <div class="card-footer">
                    

                   
                     
                      <a type="button" class="btn btn-primary" href="{{URL::to('contents/edit/'.$cont->id)}}"><i class="fa fa-edit"></i> Edit</a>
                      
                      <a type="button" class="btn btn-warning pull-right" href="{{URL::to('contents/delete/'.$cont->id)}}"><i class="fa fa-trash"></i> Delete</a>
                     

                       
                

                  </div> 
                  
                </div>
              </div>

              @endforeach

 
        	

        	</div>



          <footer class=" navbar-fixed-bottom" style="background-color: #f5f5f5;">
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('contents/nextsection/'.$section->id)}}" class="btn btn-default pull-right">Next Section &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>
        	
  

        </div>




  
          




          

@stop