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
            

        		
        		
        		 <div class="col-lg-4 col-xs-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    
                    
                    
                    <div class="card-body">
                        
                        
                       
                        <div class=" small"> Submit your referees. Click to update this section</div>
                    
                    </div>

                  </div>
                

                </a>

<hr>
               

             </div>




@foreach($conts as $cont)
             <div class="col-lg-5 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    
                    

                    <div class="btn-group pull-right" role="group" aria-label="Basic example" >
                     
                      <a type="button" class="btn btn-secondary" href="{{URL::to('contents/edit/'.$cont->id)}}"><i class="fa fa-edit"></i> Edit</a>
                      
                      <a type="button" class="btn btn-secondary" href="{{URL::to('contents/delete/'.$cont->id)}}"><i class="fa fa-trash"></i> Delete</a>
                     

                       
                    </div>

                  </div> 
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        
                        
                        <tr>
                          <td>Name</td><td>{{Content::getRefName($cont->id)}}</td>
                        </tr>

                        <tr>
                          <td>Company</td><td>{{Content::getInstitution($cont->id)}}</td>
                        </tr>

                        <tr>
                          <td>Position</td><td>{{Content::getPosition($cont->id)}}</td>
                        </tr>

                        <tr>
                          <td>Phone</td><td>{{Content::getRefPhone($cont->id)}}</td>
                        </tr>

                        <tr>
                          <td>Email</td><td>{{Content::getRefemail($cont->id)}}</td>
                        </tr>
                        

                      </table>

                  </div>
                  
                </div>
              </div>

              @endforeach

 
        	

        	</div>
        	
   

        </div>




 
   <footer class=" navbar-fixed-bottom" style="background-color: #f5f5f5;" >
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('resumes/view/'.$resume->id)}}" class="btn btn-default pull-right">Preview &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>       




          

@stop