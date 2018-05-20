@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('levels')}}"> Levels</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('levels/edit/'.$level->id)}}"> Update Level</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-lg-5 col-xs-12">
        		
        		
                    <div class="car">
                        <div class="card-boy">
                            


                             <form action="{{URL::to('levels/update/'.$level->id)}}" method="post" class="form-horizontal">

        <div class="card-boy ">

            <div class="form-group  ">
              <div class="col-xs-12 ">
                
                <input type="text" name="name" class="form-control" value="{{$level->name}}">
              </div>
            </div>
           
            <div class="form-group  ">
              <div class="col-xs-12 ">
                
                <textarea class="form-control" name="description">{{$level->description}}</textarea>
              </div>
            </div>

           
          
           




                        </div>
                        <div class="card-footr">
                            <button type="submit" class="btn btn-primary">Update</button>

                            <a href="{{URL::to('levels/delete/'.$level->id)}}" class="btn btn-danger pull-right">Delete</a>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop