
@foreach($sections as $section)
<a href="#" style="text-decoration:none">
<div class="card row">
                  <div class="card-body p-0 d-flex align-items-center">
                      
                    <div class="bg-primary p-5 d-flex mr-2 ">
                        <i class="fa fa-user font-5xl "></i>
                    </div>
                    
                    
                    <div>
                      <div>
                      
                      <label class="badge badge-success">Enabled</label>
                    </div>
                      <div class=" font-weight-bold text-primary text-uppercase">{{$section->name}}</div>

                      <div class=" small">{{$section->description}} </div>
                    
                    </div>

                  </div>
                </div>

</a>
@endforeach


