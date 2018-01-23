@extends('layouts.app')



<!DOCTYPE html>
<html lang="en">
<head>
    <title>my_home</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family: 'Open Sans', 'sans-serif';
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 0;
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
  line-height: 30px;
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}

  </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <br>
    <div class="container">
 <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>
    
    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee records <span class="caret"></span></a>              
                <ul class="dropdown-menu mega-dropdown-menu">
                 
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Leave requests</li>
                            <li><a href="/approved">Approved</a></li>
                            <li><a href="/rejected">Rejected</a></li>
                            <li><a href="/pending">Pending</a></li>
     
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Employees</li>
                            <li><a href="/emp">Employee Profiles</a></li>
                                                    
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Attendance records</li>
                            
                            <li><a href="/attrecords">Invalid records</a></li>
                                                  
                        </ul>
                    </li>
                </ul>               
            </li>



            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects<span class="caret"></span></a>                
                <ul class="dropdown-menu mega-dropdown-menu">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header"></li>
                            <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
                            <li><a href="#">Four Columns Grid</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
                            <li><a href="#">Google Fonts</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Plus</li>
                            <li><a href="#">Navbar Inverse</a></li>
                            <li><a href="#">Pull Right Elements</a></li>
                            <li><a href="#">Coloured Headers</a></li>                            
                            <li><a href="#">Primary Buttons & Default</a></li>                          
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
                            <li><a href="#">Calls to action</a></li>
                            <li><a href="#">Custom Fonts</a></li>
                            <li><a href="#">Slide down on Hover</a></li>                         
                        </ul>
                    </li>
                 
                </ul>               
            </li>
           
        </ul>



        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">E-mails</a></li>
            <li><a href="/setting">Settings</a></li>
            <li class="divider"></li>
            <li><a href="/">Log Out</a></li>
          </ul>
        </li>
        <li><a href="#">Notifications</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </nav>
</div>



    <script type="text/javascript">
    $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
    </script>
</body>
</html>
