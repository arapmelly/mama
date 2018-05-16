
@foreach($levels as $level)

<div class="col-md-4 col-sm-12">

<a href="{{URL::to('levels/edit/'.$level->id)}}" style="text-decoration:none">
<div class="card ">
                  <div class="card-body p-0 d-flex align-items-center ">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <span class="text-center">
                          <i class="icon icon-chart font-3xl "></i>
                        </span>

                    </div>
                    
                    
                    <div class="">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$level->name}}</div>

                        <div class=" small">{{$level->description}} </div>
                    
                    </div>

                  </div>
                </div>

</a>

</div>
@endforeach


