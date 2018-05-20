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

		



        <div class="container-fluid" >


        	<!-- the main card which is resume card -->
        	<div class="row">
            

        		
        		
        		 <div class="col-lg-4 col-xs-12">

                

                  <a href="{{URL::to('contents/create/'.$section->id)}}"  style="text-decoration:none">
                    <div class="card">
                    
                    <div class="card-body">
                        
                        
                       
                        <div class=" small"> Submitted your skills. Click to update this section</div>
                    
                    </div>

                  
                </div>

                </a>

<hr>
               

             </div>




@foreach($conts as $cont)
             <div class="col-lg-5  col-xs-12" style="padding:10px;">
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
                      <td>{{Content::getSkill($cont->id)}}</td>
                        </tr>
                        <tr>
                          <td>{{Content::getSkillDescription($cont->id)}}</td>
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
            <h4 style="padding:10px;">Title Goes Here</h4>
            <a href="#0" class="cd-panel__close js-cd-close">Close</a>
        </header>

        <div class="cd-panel__container">
            <div class="col-md-12 cd-panel__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam accusamus obcaecati nisi eveniet quo veniam quibusdam veritatis autem accusantium doloribus nam mollitia maxime explicabo nemo quae aspernatur impedit cupiditate dicta molestias consectetur, sint reprehenderit maiores. Tempora, exercitationem, voluptate. Sapiente modi officiis nulla sed ullam, amet placeat, illum necessitatibus, eveniet dolorum et maiores earum tempora, quas iste perspiciatis quibusdam vero accusamus veritatis. Recusandae sunt, repellat incidunt impedit tempore iusto, nostrum eaque necessitatibus sint eos omnis! Beatae, itaque, in. Vel reiciendis consequatur saepe soluta itaque aliquam praesentium, neque tempora. Voluptatibus sit, totam rerum quo ex nemo pariatur tempora voluptatem est repudiandae iusto, architecto perferendis sequi, asperiores dolores doloremque odit. Libero, ipsum fuga repellat quae numquam cumque nobis ipsa voluptates pariatur, a rerum aspernatur aliquid maxime magnam vero dolorum omnis neque fugit laboriosam eveniet veniam explicabo, similique reprehenderit at. Iusto totam vitae blanditiis. Culpa, earum modi rerum velit voluptatum voluptatibus debitis, architecto aperiam vero tempora ratione sint ullam voluptas non! Odit sequi ipsa, voluptatem ratione illo ullam quaerat qui, vel dolorum eligendi similique inventore quisquam perferendis reprehenderit quos officia! Maxime aliquam, soluta reiciendis beatae quisquam. Alias porro facilis obcaecati et id, corporis accusamus? Ab porro fuga consequatur quisquam illo quae quas tenetur.</p>

                
            </div> <!-- cd-panel__content -->
        </div> <!-- cd-panel__container -->
    </div> <!-- cd-panel -->


 <footer class=" navbar-fixed-bottom" style="background-color: #f5f5f5;" >
      <div class="container" style="padding:10px;">
        <p class="text-mute">

           <a href="{{URL::to('resumes/show/'.$resume->id)}}" class="btn btn-default "><i class="fa fa-chevron-left"></i>&nbsp;Sections</a>

          
          <a href="{{URL::to('contents/nextsection/'.$section->id)}}" class="btn btn-default pull-right">Next Section &nbsp;<i class="fa fa-chevron-right"></i></a>
        </p>
      </div>
    </footer>
          




          

@stop