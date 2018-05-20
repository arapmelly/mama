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

		



        <div class="container">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		@if($personalid == null)
        		
        		 <div class="col-lg-4 col-xs-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                      
                    
                    
                    <div class="card-body">
                        
                        
                       
                        <div class=" small"> You have not submitted your personal details. Click to update your personal information</div>
                    
                    </div>

                  
                </div>

                </a>


               

             </div>


@else
             <div class="col-lg-5 col-md-5 col-xs-12">
                <div class="card ">
                  <div class="card-header">
                    {{$section->name}}
                    <a href="{{URL::to('contents/edit/'.$personalid)}}" class="btn btn-primary btn-sm pull-right" >update</a>
                  </div>
                  <div class="card-body">
                      
                      <table class="table table-responsive-sm">

                        <tr>
                          <td>Name</td><td>{{$content->fullname}}</td>
                        </tr>
                        <tr>
                          <td>Email</td><td>{{$content->email}}</td>
                        </tr>
                        <tr>
                          <td>Phone</td><td>{{$content->phone}}</td>
                        </tr>
                        <tr>
                          <td>Nationality</td><td>{{$content->nationality}}</td>
                        </tr>
                        <tr>
                          <td>Job Title</td><td>{{$content->career_label}}</td>
                        </tr>

                        @if($content->photo)
                        <tr>
                          <td><img src="{{asset('/tmp/'.$content->photo)}}" width="100%"></td>
                        </tr>
                        @endif

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
              <p>Tell future employers the best way to get in touch with you by listing your current contact information.</p>
              
              <p>
                <h2>Tips</h2>
                <ul>
                  <li>Remember that your email address and website should be appropriate for any potential employer to view.</li>
                  <li>The standard email format most jobseekers use is lastname.firstname@emailcompany.com</li>
                  <li>it’s almost a necessity to add a professional headshot.</li>
                  <li>This photo should be similar to a passport photo, showing the head and shoulders only - no full length photos - with good lighting and a smart appearance.</li>
                  <li>Remember, this is the first impression a prospective employer will get so make it a good one!</li>
                </ul>

              </p>
                
            </div> <!-- cd-panel__content -->
        </div> <!-- cd-panel__container -->
    </div> <!-- cd-panel -->





  <footer class="foot navbar-fixed-bottom" style="background-color: #f5f5f5;">
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('contents/nextsection/'.$section->id)}}" class="btn btn-default pull-right">Next Section &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>

          

@stop