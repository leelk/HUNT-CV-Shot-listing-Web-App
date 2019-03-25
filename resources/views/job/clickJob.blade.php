<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">

    <title>Hunt</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/ffaf.PNG">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/bootstrap-select.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/fonts/themify-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/extras/settings.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/assets/css/colors/red.css" media="screen" />

</head>

<body>
<!-- Header Section Start -->
<div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{url('/')}}"><img src="{{asset('assets')}}/assets/img/logo.PNG" alt="" style="height: 50px;"></a>
                    </div>


                    @if(!Auth::check()== true)

                        <ul class="nav navbar-nav navbar-right float-right" style="">
                            <li class="right" style="margin-right: 5px;"><a href="{{route('admin.login.submit')}}"><i class=""></i>  Log In</a></li>
                            <li class="right" style="margin-right: -90px;"><a href="{{route('users.signup.submit')}}"><i class=""></i>  Sign Up</a></li>
                        </ul>

                    @elseif(Auth::check() == true)
                        <ul class="nav navbar-nav navbar-right float-right" style="">
                            <li class="right" style="margin-right: 5px;"><a href="{{route('admin.login.submit')}}"><i class=""></i>Hello {{auth::user()->f_name}}</a></li>
                            <li class="right" style="margin-right: -90px;"><a href="{{route('user.logout')}}"><i class=""></i>Log out</a></li>
                        </ul>





                    @endif








                </div>
            </nav>
        </div>
        <!-- Header Section End -->


    </section>
    <!-- end intro section -->
</div>
<!-- Featured Jobs Section Start -->
<section class="featured-jobs section">
    <div class="container">
        <h2 class="section-title">
            Featured Jobs
        </h2>
        <div class="row">






        </div>
    </div>
</section>
<!-- Featured Jobs Section End -->

<!-- Main JS  -->
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery-min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/material.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/material-kit.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/main.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/assets/js/jquery.themepunch.tools.min.js"></script>

</body>
</html>