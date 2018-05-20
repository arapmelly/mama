@extends('layouts/main')
@section('content')
		
		<ol class="breadcrumb">
      <a href="{{URL::to('templates/thumb/'.$template->id)}}" class="btn btn-default btn-xs pull-right">create thumb</a>
          <li class="breadcrumb-item"><a href="{{URL::to('templates')}}"> templates</a></li>
         <li class="breadcrumb-item"><a href="{{URL::to('templates/show/'.$template->id)}}"> {{$template->name}}</a></li>
         
         
         
          
        </ol>

		



        <div class="container-fluid">


        	<!-- the main card which is resume card -->
        	<div class="row">

            <div class="col-lg-4 col-xs-12">
            
            
                    <div class="card">
                        <div class="card-body">
                            


                             <form action="{{URL::to('templates/update/'.$template->id)}}" method="post" class="form-horizontal">

        <div class="card-body ">


          <table class="table">

            <tr>
              <td>Borders</td>
            </tr>
            <tr>
              <td>Top</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-sm-12 ">
                
                    <input type="text" name="border_top_size" class="form-control" placeholder="size" value="{{$template->border_top_size}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_top_color" class="form-control" placeholder="color" value="{{$template->border_top_color}}">
                  </div>
                </div>

              </td>
              <td>

                    
                  <div class="form-group row">
                    <div class=" col-xs-12 ">
                
                        <select class="form-control" name="border_top_type">
                          <option value="solid">solid</option>
                          <option value="dotted">dotted</option>
                        </select>
                    </div>
                  </div>

              </td>

            </tr>


            <tr>
              <td>Bottom</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_bottom_size" class="form-control" placeholder="size" value="{{$template->border_bottom_size}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_bottom_color" class="form-control" placeholder="color" value="{{$template->border_bottom_color}}">
                  </div>
                </div>

              </td>
              <td>

                    
                  <div class="form-group row">
                    <div class=" col-xs-12 ">
                
                        <select class="form-control" name="border_bottom_type">
                          <option value="solid">solid</option>
                          <option value="dotted">dotted</option>
                        </select>
                    </div>
                  </div>

              </td>

            </tr>


            <tr>
              <td>Left</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_left_size" class="form-control" placeholder="size" value="{{$template->border_left_size}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_left_color" class="form-control" placeholder="color" value="{{$template->border_left_size}}">
                  </div>
                </div>

              </td>
              <td>

                    
                  <div class="form-group row">
                    <div class=" col-xs-12 ">
                
                        <select class="form-control" name="border_left_type">
                          <option value="solid">solid</option>
                          <option value="dotted">dotted</option>
                        </select>
                    </div>
                  </div>

              </td>

            </tr>


            <tr>
              <td>Right</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_right_size" class="form-control" placeholder="size" value="{{$template->border_right_size}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="border_right_color" class="form-control" placeholder="color" value="{{$template->border_right_size}}">
                  </div>
                </div>

              </td>
              <td>

                    
                  <div class="form-group row">
                    <div class=" col-xs-12 ">
                
                        <select class="form-control" name="border_right_type">
                          <option value="solid">solid</option>
                          <option value="dotted">dotted</option>
                        </select>
                    </div>
                  </div>

              </td>

            </tr>

            <tr>
              <td>Text</td>
            </tr>

            <tr>
              <td>Body</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_body_color" class="form-control" placeholder="color" value="{{$template->text_body_color}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_body_fontsize" class="form-control" placeholder="fontsize" value="{{$template->text_body_fontsize}}">
                  </div>
                </div>

              </td>

            </tr>
              <tr>
                <td></td>
               <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_body_fontweight" class="form-control" placeholder="fontweight" value="{{$template->text_body_fontweight}}">
                  </div>
                </div>

              </td>

               <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    
                    <select class="form-control" name="text_body_fontfamily">
                          <option value="Georgia">Georgia</option>
                          <option value="Times New Roman">Times New Roman</option>
                          <option value="Arial">Arial</option>
                          <option value="Verdana">Verdana</option>
                          <option value="Courier New">Courier New</option>
                          <option value="Lucida Console">Lucida Console</option>
                          
                        </select>
                  </div>
                </div>

              </td>

            </tr>




            <tr>
              <td>Header</td>
              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_header_color" class="form-control" placeholder="color" value="{{$template->text_header_color}}">
                  </div>
                </div>

              </td>

              <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_header_fontsize" class="form-control" placeholder="fontsize" value="{{$template->text_header_fontsize}}">
                  </div>
                </div>

              </td>

            </tr>
              <tr>
                <td></td>
               <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                    <input type="text" name="text_header_fontweight" class="form-control" placeholder="fontweight" value="{{$template->text_header_fontweight}}">
                  </div>
                </div>

              </td>

               <td>

                <div class="form-group row ">
                  <div class=" col-xs-12 ">
                
                      
                      <select class="form-control" name="text_header_fontfamily">
                          <option value="Georgia">Georgia</option>
                          <option value="Times New Roman">Times New Roman</option>
                          <option value="Arial">Arial</option>
                          <option value="Verdana">Verdana</option>
                          <option value="Courier New">Courier New</option>
                          <option value="Lucida Console">Lucida Console</option>
                          
                        </select>
                  </div>
                </div>

              </td>

            </tr>

          </table>

            

            
            

             
           
            
           
          
           




                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                        </div>
                    </div>




             </div>
            




          

          </div>


          <div class=""  >
            <div class="col-lg-8 col-xs-12" >



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
        	
        	


        </div>

@stop