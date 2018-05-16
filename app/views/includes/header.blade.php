<header class="app-header navbar">

      <!-- <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <a class="navbar-brand" href="{{URL::to('/')}}">

        <img class="navbar-brand-full" src="{{asset('img/brand/cv_logo.jpg')}}" width="100" height="50" alt="CVMama " >
      
      </a>

      @if(Confide::user()->user_type == 'admin')
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      @endif
      
      <ul class="nav navbar-nav ml-auto" style="margin-right:25px;">
        
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icon icon-user"></i>
            {{Confide::user()->email}}
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            
            <!-- <a class="dropdown-item" href="">
              <i class="fa fa-user"></i> Profile</a>

             -->

            
            

            <div class="divider"></div>
            

            <a class="dropdown-item" href="{{URL::to('users/logout')}}">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      
    </header>