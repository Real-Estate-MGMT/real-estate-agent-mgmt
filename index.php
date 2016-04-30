<?php

$scripts = [
    'angular.min.js',
    'angular-messages.min.js',
    'angular-route.min.js',
    'angular-animate.min.js',
    'app.js',
    'json2.js',
    'jquery-2.1.1.min.js',
    'underscore.js',
    'moment-2.5.1.js',
    'jquery-ui.min.js',
    'jquery-ui-touch-punch.js',
    'jquery.placeholder.js',
    'bootstrap.js',
    'jquery.touchSwipe.min.js',
    'jquery.slimscroll.min.js',
    'jquery.visible.js',
    'infobox.js',
    'clndr.js',
    'jquery.tagsinput.min.js',
    'bootstrap-datepicker.js',
    'fileinput.min.js',
    'calendar.js',
    'map.js',
    'index.js',
    //'services/noticias.js',
    'services/mapServices.js',
    'controllers/indiceController.js',
    'controllers/propiedadController.js',
    //'controllers/detalle.js',
    //'controllers/formulario.js'
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Real Estate Management</title>
        <link rel="icon" href="favicon.ico">
        <link href="libs/css/bootstrap.css" rel="stylesheet">
        <link href="libs/css/font-awesome.css" rel="stylesheet">
        <link href="libs/css/simple-line-icons.css" rel="stylesheet">
        <link href="libs/css/jquery-ui.css" rel="stylesheet">
        <link href="libs/css/datepicker.css" rel="stylesheet">
        <link href="libs/css/fileinput.min.css" rel="stylesheet">
        <link href="libs/css/app.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div id="header">
        <div class="logo">
            <a href="index.html">
                <span class="fa fa-home marker"></span>
                <span class="logoText">JAC</span>
            </a>
        </div>
        <a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
        <div class="search">
            <span class="searchIcon icon-magnifier"></span>
            <input type="text" placeholder="Search for houses, apartments...">
        </div>
        <div class="headerUserWraper">
            <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="icon-user"></span><span class="counter">5</span></a>
            <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                <img class="avatar headerAvatar pull-left" src="images/logo.jpg" alt="John Smith">
                <div class="userTop pull-left">
                    <span class="headerUserName">JAC Consultores</span> <span class="fa fa-angle-down"></span>
                </div>
                <div class="clearfix"></div>
            </a>
            <div class="dropdown-menu pull-right userMenu" role="menu">
                <div class="mobAvatar">
                    <img class="avatar mobAvatarImg" src="images/avatar-1.png" alt="John Smith">
                    <div class="mobAvatarName">JAC Consultores</div>
                </div>
                <ul>
                    <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
                    <li><a href="profile.html"><span class="icon-user"></span>Profile</a></li>
                    <li><a href="#"><span class="icon-bell"></span>Notifications <span class="badge pull-right bg-red">5</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><span class="icon-power"></span>Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="headerNotifyWraper">
            <a href="#" class="headerNotify dropdown-toggle" data-toggle="dropdown">
                <span class="notifyIcon icon-bell"></span>
                <span class="counter">0</span>
            </a>
            <div class="dropdown-menu pull-right notifyMenu" role="menu">
                <div class="notifyHeader">
                    <span>Notifications</span>
                    <a href="#" class="notifySettings icon-settings"></a>
                    <div class="clearfix"></div>
                </div>
                <ul class="notifyList">
                </ul>
                <a href="#" class="notifyAll">See All</a>
            </div>
        </div>
        <a href="#" class="mapHandler"><span class="icon-map"></span></a>
        <div class="clearfix"></div>
    </div>
    <div id="leftSide">
        <nav class="leftNav scrollable">
            <div class="search">
                <span class="searchIcon icon-magnifier"></span>
                <input type="text" placeholder="Search for houses, apartments...">
                <div class="clearfix"></div>
            </div>
            <ul>
                <li><a href="explore.html"><span class="navIcon icon-compass"></span><span class="navLabel">Explore</span></a></li>
                <li><a href="single.html"><span class="navIcon icon-home"></span><span class="navLabel">Single</span></a></li>
                <li><a href="add.html"><span class="navIcon icon-plus"></span><span class="navLabel">New</span></a></li>
                <!--<li class="hasSub">
                    <a href="#"><span class="navIcon icon-drop"></span><span class="navLabel">Colors</span><span class="fa fa-angle-left arrowRight"></span><span class="badge bg-yellow">5</span></a>
                    <ul class="colors">
                        <li><a href="#">Red <span class="fa fa-circle-o c-red icon-right"></span></a></li>
                        <li><a href="#">Green <span class="fa fa-circle-o c-green icon-right"></span></a></li>
                        <li><a href="#">Blue <span class="fa fa-circle-o c-blue icon-right"></span></a></li>
                        <li><a href="#">Yellow <span class="fa fa-circle-o c-yellow icon-right"></span></a></li>
                        <li><a href="#">Magenta <span class="fa fa-circle-o c-magenta icon-right"></span></a></li>
                    </ul>
                </li>-->
                <!--<li class="hasSub">
                    <a href="#"><span class="navIcon icon-layers"></span><span class="navLabel">Elements</span><span class="fa fa-angle-left arrowRight"></span></a>
                    <ul>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons <span class="badge pull-right bg-yellow">841</span></a></li>
                        <li><a href="grid.html">Grid</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="lists.html">Lists</a></li>
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="form.html">Form</a></li>
                    </ul>
                </li>-->
                <!--<li class="hasSub">
                    <a href="#"><span class="navIcon icon-link"></span><span class="navLabel">Pages</span><span class="fa fa-angle-left arrowRight"></span></a>
                    <ul>
                        <li><a href="signin.html">Sign In</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="index.html">Homepage Slideshow</a></li>
                        <li><a href="index-map.html">Homepage Map</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
        <!--<div class="leftUserWraper dropup">
            <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
                <img class="avatar" src="images/avatar-1.png" alt="John Smith"><span class="counter">5</span>
                <div class="userBottom pull-left">
                    <span class="bottomUserName">John Smith</span> <span class="fa fa-angle-up pull-right arrowUp"></span>
                </div>
                <div class="clearfix"></div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
                <li><a href="profile.html"><span class="icon-user"></span>Profile</a></li>
                <li><a href="#"><span class="icon-bell"></span>Notifications <span class="badge pull-right bg-red">5</span></a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="icon-power"></span>Logout</a></li>
            </ul>
        </div>-->
    </div>
    <div class="closeLeftSide"></div>
    <div ng-app="realestateApp" ng-view></div>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places" type="text/javascript"></script>
    <?php
    // Carga de los archivos de JavaScript
    foreach ($scripts as $script) {
        echo "<script src='libs/js/$script'></script> \n";
    }
    ?>
    </body>
</html