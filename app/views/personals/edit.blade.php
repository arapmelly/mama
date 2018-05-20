@extends('layouts/client')
@section('content')
		
		<ol class="breadcrumb">

      <a href="#0" class="btn btn-xs btn-default js-cd-panel-trigger pull-right" data-panel="main">Tips</a>

         
          <li class="breadcrumb-item "><a href="{{URL::to('resumes/show/'.$cont->resume_id)}}" > CV-{{$resume->cv_ref}} </a></li>
          

          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-item "><a href="{{URL::to('contents/view/'.$section->id)}}" >{{$section->name}}</a></li>

         
          <!-- <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#update">Update</button>
          
         
           <button type="button" class="btn btn-sm btn-primary breadcrumb-menu" data-toggle="modal" data-target="#create">Create</button>
           -->

          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		



             <div class="col-lg-5 col-md-5 col-xs-12">
                <div class="card">
                  <form action="{{URL::to('contents/update/'.$cont->id)}}" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                      
                     

                     <input type="hidden" name="section_id" value="{{$section->id}}">

                  <input type="hidden" name="resume_id" value="{{$cont->resume_id}}">

                  <input type="hidden" name="user_id" value="{{$cont->user_id}}">
                  
                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
            
                    <input type="text" name="fullname" class="form-control" value="{{$content->fullname}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="phone" class="form-control" value="{{$content->phone}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="email" class="form-control" value="{{$content->email}}" required>
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="nationality" class="form-control" value="{{$content->nationality}}" required>
                    </div>
                  </div>


                  <div class="form-group row ">
                    <div class=" col-sm-12 ">
                
                    <input type="text" name="career_label" class="form-control" value="{{$content->career_label}}">
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
                    
                    <button type="submit" class="btn btn-primary  " >Update</button>
                  </div>

                </form>
                  
                </div>
              </div>

 
        	

        	</div>
        	
        	


        </div>






         <div class="cd-panel cd-panel--from-right js-cd-panel-main">
        <header class="cd-panel__header">
            <h4 style="padding:10px;">Title Goes Here</h4>
            <a href="#0" class="cd-panel__close js-cd-close">Close</a>
        </header>

        <div class="cd-panel__container">
            <div class="col-md-12 cd-panel__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam accusamus obcaecati nisi eveniet quo veniam quibusdam veritatis autem accusantium doloribus nam mollitia maxime explicabo nemo quae aspernatur impedit cupiditate dicta molestias consectetur, sint reprehenderit maiores. Tempora, exercitationem, voluptate. Sapiente modi officiis nulla sed ullam, amet placeat, illum necessitatibus, eveniet dolorum et maiores earum tempora, quas iste perspiciatis quibusdam vero accusamus veritatis. Recusandae sunt, repellat incidunt impedit tempore iusto, nostrum eaque necessitatibus sint eos omnis! Beatae, itaque, in. Vel reiciendis consequatur saepe soluta itaque aliquam praesentium, neque tempora. Voluptatibus sit, totam rerum quo ex nemo pariatur tempora voluptatem est repudiandae iusto, architecto perferendis sequi, asperiores dolores doloremque odit. Libero, ipsum fuga repellat quae numquam cumque nobis ipsa voluptates pariatur, a rerum aspernatur aliquid maxime magnam vero dolorum omnis neque fugit laboriosam eveniet veniam explicabo, similique reprehenderit at. Iusto totam vitae blanditiis. Culpa, earum modi rerum velit voluptatum voluptatibus debitis, architecto aperiam vero tempora ratione sint ullam voluptas non! Odit sequi ipsa, voluptatem ratione illo ullam quaerat qui, vel dolorum eligendi similique inventore quisquam perferendis reprehenderit quos officia! Maxime aliquam, soluta reiciendis beatae quisquam. Alias porro facilis obcaecati et id, corporis accusamus? Ab porro fuga consequatur quisquam illo quae quas tenetur.</p>

                
            </div> <!-- cd-panel__content -->
        </div> <!-- cd-panel__container -->
    </div> <!-- cd-panel -->









          

@stop