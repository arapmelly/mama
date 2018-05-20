@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">

      <a href="#0" class="btn btn-xs btn-default js-cd-panel-trigger pull-right" data-panel="main">Pro Tip</a>

         
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


 <div class="cd-panel cd-panel--from-right js-cd-panel-main">
        <header class="cd-panel__header">
            <h4 style="padding:10px;">Professional Tips</h4>
            <a href="#0" class="cd-panel__close js-cd-close">Close</a>
        </header>

        <div class="cd-panel__container">
            <div class="col-md-12 cd-panel__content">
                <p>A short, impactful statement of your career goals and the industry you’d like to work in.</p>
                  <p>
                    <h2>Tips</h2>
                    <ul>
                      <li>After your name, this is the first section a potential employer will read. Try to be clear and provide a strong, concise objective statement that describes the position you want and the industry in which you'd like to work.</li>
                      <li>If you prefer to include a summary statement, ensure to provide a brief overview of your career trajectory and work history that provides insight into your past.</li>
                    </ul>
                  </p>


            </div> <!-- cd-panel__content -->
        </div> <!-- cd-panel__container -->
    </div> <!-- cd-panel -->




    <footer class=" navbar-fixed-bottom" style="background-color: #f5f5f5;">
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('contents/nextsection/'.$section->id)}}" class="btn btn-default pull-right">Next Section &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>
          




          

@stop