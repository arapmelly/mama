@extends('layouts/temp')
@section('content')


       

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		
        		
        		

<div class="col-lg-12 col-xs-12">

             @if($template->layout == 'stylish')
              
              @include('themes/stylish')

            @elseif($template->layout == 'default')

              @include('themes/default')

            @elseif($template->layout == 'mono')

              @include('themes/mono')

            @elseif($template->layout == 'swiss')

              @include('themes/swiss')

            @endif

</div>



        	

        	</div>
        	
        	


        </div>





        


@stop