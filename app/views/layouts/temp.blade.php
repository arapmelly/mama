<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CVMama - Online CV Maker</title>

    <!-- Bootstrap Core CSS -->
    
        
    
   {{HTML::style('node_modules/flag-icon-css/css/flag-icon.min.css')}}

    {{HTML::style('node_modules/font-awesome/css/font-awesome.min.css')}}
 
    {{HTML::style('node_modules/simple-line-icons/css/simple-line-icons.css')}}
    
    
    {{HTML::style('assets/panel/css/style.css')}}

    {{HTML::style('assets/bootstrap/css/bootstrap.css')}}

    
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

       @yield('content')
        <!-- /.row -->





    </div>
    <!-- /.container -->


    

    <!-- jQuery Version 1.11.1 -->
    
    {{HTML::script('assets/bootstrap/js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    
    {{HTML::script('assets/bootstrap/js/bootstrap.min.js')}}

    {{HTML::script('assets/panel/js/main.js')}}

</body>

</html>
