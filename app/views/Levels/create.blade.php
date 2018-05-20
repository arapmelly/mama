@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('levels')}}"> Levels</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('levels/create')}}"> New Level</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-lg-5 col-xs-12">
        		
        		
                    <div class="car">
                        <div class="card-bod">
                            


                             <form action="{{URL::to('levels')}}" method="post" class="form-horizontal">

        <div class="card-boy ">

            <div class="form-group">
              <div class="col-xs-12 ">
                
                <input type="text" name="name" class="form-control" placeholder="Level Name">
              </div>
            </div>
           
            <div class="form-group">
              <div class="col-xs-12 ">
                
                <textarea class="form-control" name="description">Level description...</textarea>
              </div>
            </div>

           
          
           




                        </div>
                        <div class="card-foote">
                            <button type="submit" class="btn btn-default pull-right">Create Level</button>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop