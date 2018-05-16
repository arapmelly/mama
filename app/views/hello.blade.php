@extends('layouts/main')
@section('content')
    
    <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('admin')}}"> Resumes</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          <a href="{{URL::to('resumes/create')}}" class="breadcrumb-menu btn btn-primary">New Resume</a>
          
        </ol>

    



        <div class="container-fluid">


          <!-- the main card which is resume card -->
          <div class="row">

            
            
            @foreach($resumes as $resume)

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('resumes/show/'.$resume->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="fa fa-file font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">CV-{{$resume->cv_ref}}</div>

                        <div class=" small">Level : {{ Level::getLevelName($resume->level_id)}} </div>

                        <div class=" small">Created : {{$resume->created_at}} </div>

                        
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


          

          </div>
          
          


        </div>

@stop