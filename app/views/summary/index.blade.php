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
            

        		@if($id == null)
        		
        		 <div class="col-lg-4 col-xs-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    
                    
                    
                    <div class="card-body">
                        
                        
                       
                        <div class=" small"> You have not submitted your career summary details. Click to update this section</div>
                    
                    </div>

                  
                </div>

                </a>


               

             </div>


@else
             <div class="col-lg-5  col-xs-12">
                <div class="card">
                  <div class="card-header">
                    {{$section->name}}
                    <a href="{{URL::to('contents/edit/'.$id)}}" class="btn btn-primary btn-sm pull-right" >update</a>
                  </div>
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        
                        <tr>
                          <td>{{$content->summary}}</td>
                        </tr>
                        

                      </table>

                  </div>
                  
                </div>
              </div>
@endif
 
        	

        	</div>
        	
  

        </div>




    <footer class=" navbar-fixed-bottom" style="background-color: #f5f5f5;">
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('contents/nextsection/'.$section->id)}}" class="btn btn-default pull-right">Next Section &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>
          




          

@stop