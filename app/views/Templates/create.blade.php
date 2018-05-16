@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('templates')}}"> Templates</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('templates/create')}}"> New Template</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-md-4 col-sm-12">
        		
        		
                    <div class="card">
                        <div class="card-body">
                            


                             <form action="{{URL::to('templates')}}" method="post" class="form-horizontal">

        <div class="card-body ">

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="name" class="form-control" placeholder="Template Name">
              </div>
            </div>

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="cost" class="form-control" placeholder="Template Cost">
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
                            <button type="submit" class="btn btn-primary">Create</button>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop