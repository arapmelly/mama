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
            

        		
        		
        		 <div class="col-lg-4 col-sm-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    
                    
                    
                    <div class="">
                        
                        
                       
                        <div class=" small"> Submit your work experience. Click to update this section</div>
                    
                    </div>

                
                </div>

                </a>

<hr>
               

             </div>




@foreach($conts as $cont)
             <div class="col-lg-5 col-xs-12" style="padding:10px;">
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
                          <td>Company</td><td>{{Content::getInstitution($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>Position</td><td>{{Content::getPosition($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>Start Date</td><td>{{Content::getStartDate($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>End Date</td><td>{{Content::getEndDate($cont->id)}}</td>
                        </tr>
                        
                        <tr>
                          <td>Summary</td><td>{{Content::getSummary($cont->id)}}</td>
                        </tr>
                        

                      </table>

                  </div>
                  
                </div>
              </div>

              @endforeach

 
        	

        	</div>
        	
  

        </div>


 <div class="cd-panel cd-panel--from-right js-cd-panel-main">
        <header class="cd-panel__header">
            <h4 style="padding:10px;">Professional Tips</h4>
            <a href="#0" class="cd-panel__close js-cd-close">Close</a>
        </header>

        <div class="cd-panel__container">
            <div class="col-md-12 cd-panel__content">
                <p>Listing the experience you’ve had ensuring to include keywords from the job description (e.g. 'project management', 'marketing' etc.) allows potential employers to get a sense of how well-matched you are to the position and how well you know the role.</p>
                <p>
                  <h2>Tips</h2>
                  <ul>
                    <li>Make sure to use action verbs throughout to describe your work duties.</li>
                    <li>Focus on achievements and results; don't simply tell a potential employer what you did (i.e., your tasks), tell them how you did it and the results you achieved.</li>
                    <li>Keep in mind that the skills you learned or honed at a given job are what's important - focus on what skills would transfer to a potential job. For example, if you've worked as a cashier, this means that you've learned transferrable skills like customer service, problem solving, conflict management, etc. Don't shy away from jobs that may not seem immediately related.</li>
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