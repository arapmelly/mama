@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">
         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$resume->id)}}" > CV-{{$resume->cv_ref}} </a></li>
         
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>

          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->
           <a href="{{URL::to('contents/create/'.$section->id)}}" class="btn btn-primary breadcrumb-menu">Add Referee</a>
          
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
                        
                        
                       
                        <div class=" small"> You have not submitted your referees. Click to update this section</div>
                    
                    </div>

                  </div>
                </div>

                </a>


               

             </div>


@else

@foreach($conts as $cont)
             <div class="col-sm-6 col-md-4 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    Referee
                    

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
@endif
 
        	

        	</div>
        	
   <div>     	
<a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-primary" ><i class="fa fa-home"></i> Back to Sections</a>
</div>

        </div>




 
          




          

@stop