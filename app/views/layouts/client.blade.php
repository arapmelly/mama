<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0-beta.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!DOCTYPE html>
<html lang="en">
  @include('includes/head')
  <body class="app header-fixed sidebar-minimized aside-menu-fixed sidebar-lg-show">
    @include('includes/header')
    <div class="app-body">


     
      
      <main class="main">

        @yield('content')

      
        
      </main>


      
    </div>
    <footer class="app-footer">
      <div>
        
        <span>&copy; {{date('Y')}} <a href="https://cvmama.co.ke">CVMama</a></span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://softcore.co.ke">Softcore Technologies</a>
      </div>
    </footer>
    <!-- Bootstrap and necessary plugins-->
    
    {{HTML::script('node_modules/jquery/dist/jquery.min.js')}}
    
    {{HTML::script('node_modules/popper.js/dist/umd/popper.min.js')}}
    
    {{HTML::script('node_modules/bootstrap/dist/js/bootstrap.min.js')}}
    
    {{HTML::script('node_modules/pace-progress/pace.min.js')}}
    
    {{HTML::script('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}
    
    {{HTML::script('node_modules/coreui/coreui/dist/js/coreui.min.js')}}
  </body>
</html>