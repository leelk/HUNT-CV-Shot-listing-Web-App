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

        <div class="search-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Find the job that fits your Skills</h1><br><h2>More than <strong>5</strong> jobs are waiting..</h2>
                        <div class="content">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="job title / keywords / company name">
                                            <i class="ti-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="city / province / zip code">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select class="dropdown-product selectpicker">
                                                    <option>All Categories</option>
                                                    <option>Finance</option>
                                                    <option>IT & Engineering</option>
                                                    <option>Education/Training</option>
                                                    <option>Art/Design</option>
                                                    <option>Sale/Markting</option>
                                                    <option>Healthcare</option>
                                                    <option>Science</option>
                                                    <option>Food Services</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-6">
                                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="popular-jobs">
                            <b>Popular Keywords: </b>
                            <a href="#">Web Design</a>
                            <a href="#">Manager</a>
                            <a href="#">Programming</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            @foreach($vacancies as $vacancy)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item" >
                    <div class="featured-wrap">
                        <div class="featured-inner">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="job-page.html">
                                    {{--<img src="{{asset('assets')}}/assets/img/features/img-2.jpg" alt="">--}}
                                    <img src="{{Storage::disk('local')->url($vacancy->image)}}" alt="" style="height: 250px; width: 350px;">
                                </a>
                            </figure>
                            <div class="item-body">
                                <h3 class="job-title"><a href="job-page.html">{{$vacancy->title}}</a></h3>
                                <div class="adderess"><i class="ti-location-pin"></i> {{$vacancy->description}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <span><i class="ti-calendar"></i> {{$vacancy->created_at->diffForHumans()}}</span>
                        <span><i class="ti-time"></i> Full Time</span>
                        <div class="view-iocn">
                            <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Jobs Section End -->


<!-- Counter Section Start -->
<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h2>Jobs</h2>
                        <h1 class="counter">12050</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="desc">
                        <h2>Members</h2>
                        <h1 class="counter">10890</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-heart"></i>
                    </div>
                    <div class="desc">
                        <h2>Company</h2>
                        <h1 class="counter">9050</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>

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