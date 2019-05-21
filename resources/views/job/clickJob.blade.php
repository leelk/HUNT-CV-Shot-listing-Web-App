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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/assets/css/colors/red.css" media="screen" />

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
        <div class="row">
            <div class="col-md-6">

                <div class="box">
                <h1>{{$data[0]->title}}</h1>

{{--{{dd($data[0]->id)}}--}}


                <p align="justify" style="width: 360px"><strong>{{$data[0]->description}}</strong></p>
                <br>

                <img src="{{Storage::disk('local')->url($data[0]->image)}}" alt="" style="height: 250px; width: 350px;">


                <br><br>




                    <h2 style="width: 510px"><span class="glyphicon glyphicon-home"></span> {{$data[0]->c_name}}</h2>



                    <h5>    &nbsp <i class='fas fa-at'></i> {{$data[0]->email}}</h5>
                    <h5>    &nbsp <i class='fas fa-phone'></i> {{$data[0]->c_phone}}</h5>
                    <h5>    &nbsp <i class='fas fa-map-marker-alt'></i> {{$data[0]->c_city}}</h5>




                </div>



                <style>
                    .box {
                        width: 420px;
                        padding: 10px;
                        border: 2px solid black;
                        margin: 0;
                    }
                </style>



            </div>


            <div class="col-md-6">
                <h2>Rate Your experince</h2>

                    <div class="container">
                        <div class="row">
                            <form class="form-horizontal" method="POST" action="{{ route('score.save') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-6">

                                        <input name="invisible" type="hidden" value="{{$data[0]->id}}">



                                        <input class="form-control" id="qulificate" type="text" placeholder="{{$data[0]->q1}}" readonly style="width: 250px">
                                        <select name="qulification1" class="droped">
                                            <option value="0">Rate your skill </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="qulificate1" placeholder="{{$data[0]->q2}}" readonly style="width: 250px">
                                        <select name="qulification2" class="droped">
                                            <option value="0">Rate your skill </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="qulificate2" placeholder="{{$data[0]->q3}}" readonly style="width: 250px">
                                        <select name="qulification3" class="droped">
                                            <option value="0">Rate your skill </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="qulificate3" placeholder="{{$data[0]->q4}}" readonly style="width: 250px">
                                        <select name="qulification4" class="droped">
                                            <option value="0">Rate your skill </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            submit
                                        </button>
                                    </div>
                                </div>





                                        @if($errors->any())
                                        <div class="alert alert-success" role="alert">
                                            <h4>{{$errors->first()}}</h4>
                                        </div>
                                @endif






                            </form>
                            </div>
                        </div>
                    </div>



                </div>





<style>
    .ins{
        width: 52px;
        height: 125px;


    }

    .droped{
        color: black;
        border-radius: 5px;
        background-color:ivory;
        height: 40px;
    }

    #qulificate{
        color: white;
        background-color: black;

    }

    #qulificate2,#qulificate3,#qulificate1{
        color: white;
        background-color: black;

    }


</style>


{{--                <form action="">--}}




{{--                    <input class="form-control" type="text" placeholder="{{$id->q2}}" readonly style="width: 250px">--}}
{{--                    <H5>Select Your level :</H5><input type="number" min="0" max="10">--}}


{{--                    <input type="submit" >--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <h1>{{$id->title}}</h1>--}}
{{--                <p style="width: 360px"><strong>{{$id->description}}</strong></p>--}}
{{--                <br>--}}

{{--                <img src="{{Storage::disk('local')->url($id->image)}}" alt="" style="height: 250px; width: 350px;">--}}

{{--            </div>--}}
{{--        </div>--}}




{{--    </div>--}}







{{--</section>--}}
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