@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('levels')}}"> Levels</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          <a href="{{URL::to('levels/create')}}" class="breadcrumb-menu btn btn-primary">New Level</a>
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		@include('cards/levels')
        	

        	</div>
        	
        	


        </div>

@stop