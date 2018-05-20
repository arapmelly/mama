

@foreach($levels as $level)

<div class="col-lg-5 col-xs-12" style="padding:10px">

<a href="{{URL::to('levels/edit/'.$level->id)}}" style="text-decoration:none">
<div class="card ">
                      
                    
                    
                    
                    <div class="card-body">
                        
                        
                        <div class=" font-weight-bold text-primary text-uppercase">{{$level->name}}</div>

                        <div class=" small">{{$level->description}} </div>
                    
                    </div>

                  
                </div>

</a>

</div>
@endforeach


