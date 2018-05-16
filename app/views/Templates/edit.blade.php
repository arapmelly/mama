@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('templates')}}"> Templates</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('templates/edit/'.$template->id)}}"> {{$template->name}}</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-md-4 col-sm-12">
        		
        		
                    <div class="card">
                        <div class="card-body">
                            


                             <form action="{{URL::to('templates/update/'.$template->id)}}" method="post" class="form-horizontal">

        <div class="card-body ">

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="name" class="form-control" value="{{$template->name}}">
              </div>
            </div>

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="cost" class="form-control" value="{{$template->cost}}">
              </div>
            </div>
            

             <div class="form-group row">
              <div class="col-sm-12 ">
                
                <select class="form-control" name="layout">

                  @foreach($layouts as $layout)
                    <option value="{{$layout}}">{{$layout}}</option>
                  @endforeach
                </select>
              </div>
            </div>
           
            
           
          
           




                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop