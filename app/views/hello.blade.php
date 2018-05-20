@extends('layouts/main')
@section('content')
    
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('admin')}}"> Resumes</a></li>
         
          
        </ol>

    



        <div class="container">


          <!-- the main card which is resume card -->
          <div class="row">

            <div class="col-md-4 col-xs-12" style="padding:10px;">

              <a href="{{URL::to('resumes/create')}}" style="text-decoration:none">
            
                  <div class="card bg-primary text-center">
                    
                    <div class="card-body  align-items-center ">
                      <div class="font-weight-bold text-primary text-uppercase">CREATE A NEW CV</div>
                    </div>

                  </div>

              </a>

            </div>

            
            @foreach($resumes as $resume)

<div class="col-md-4 col-xs-12" style="padding:10px;">

        <a href="{{URL::to('resumes/show/'.$resume->id)}}" style="text-decoration:none">
            
            <div class="card">
                 <div class="card-body  align-items-center ">
                  <div class="font-weight-bold text-primary text-uppercase">CV-{{$resume->cv_ref}}</div>
                  <div class="small">Level : {{ Level::getLevelName($resume->level_id)}} </div>
                  <div class="small">Created : {{$resume->created_at}} </div>
                </div>
            </div>

        </a>

</div>
@endforeach


          

          </div>
          
          


        </div>

@stop