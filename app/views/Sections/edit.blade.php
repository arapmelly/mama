@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{URL::to('sections')}}"> Levels</a></li>
          <li class="breadcrumb-item"><a href="{{URL::to('sections/edit/'.$section->id)}}"> Edit Section</a></li>
         
         
         
          <!-- Breadcrumb Menu-->
          
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

        		<div class="col-md-4 col-sm-12">
        		
        		
                    <div class="card">
                        <div class="card-body">
                            


                             <form action="{{URL::to('sections/update/'.$section->id)}}" method="post" class="form-horizontal">

        <div class="card-body ">

            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <input type="text" name="name" class="form-control" value="{{$section->name}}">
              </div>
            </div>
           
            <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <textarea class="form-control" name="description">{{$section->description}}</textarea>
              </div>
            </div>

           <div class="form-group row ">
              <div class="col-sm-12 ">
                
                <select class="form-control" name="section_ref">
                  <option value="personal">Personal</option>
                  <option value="summary">Summary</option>
                  <option value="work">Work</option>
                  <option value="education">Education</option>
                  <option value="skill">Skill</option>
                  <option value="reference">Reference</option>
                  <!--
                  <option value="award">Award</option>
                  <option value="publication">Publication</option>
                  <option value="certification">Certification</option>
                  <option value="association">Association</option>
                -->
                </select>
              </div>
            </div>

          
           




                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>

                            <a href="{{URL::to('sections/delete/'.$section->id)}}" class="btn btn-danger pull-right">Delete</a>

                        </form>
                        </div>
                    </div>




        	   </div>

        	</div>
        	
        	


        </div>

@stop