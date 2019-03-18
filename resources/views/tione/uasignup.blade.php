<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


{{--welcome.blade coppy start--}}

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


    {{--welcome.blade copy end --}}

    {{--Profile Image --}}
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    {{--end Profile Image--}}



    <!------ Include the above in your HEAD tag ---------->
    <title>HUNT Signup</title>
</head>

<section id="intro" class="section-intro">
    <div class="logo-menu">
        <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand logo"  style="left: -410px;top:-10px ; " href="{{url('/')}}"><img src="{{asset('assets')}}/assets/img/logo.PNG" alt="" style="height: 50px;"></a>
                </div>


            </div>
        </nav>
    </div>
    <!-- Header Section End -->

</section>










<body class="body2">
<div class="container login-container">
    <div class="row">


        <div class="col-md-6 login-form-1">
            <div class="title_candidate">
                <h3>Signup as a Candidate</h3>
            </div>
            <div class="panel-body">





                <form class="form-horizontal" method="POST" action="{{ route('register') }}" >
                    {{ csrf_field() }}
                    {{--Profile Image --}}

                    {{--<div class="form-group">--}}
                    {{--<div class="form-group"  style="text-align: center" >--}}
                    {{--<img id="blah" src="https://bit.ly/2q98CcI"style="width: 150px; height: 150px" alt=""/><br>--}}
                    {{--<label for="file-upload"style="margin-left:5px;color: #d9edf7">Upload a Profile Photo</label>--}}

                    {{--<input type='file' onchange="readURL(this);" style="margin-left: 100px"/>--}}

                    {{--</div>--}}
                    {{--</div>--}}




                    {{--First name and LastName--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm {{ $errors->has('f_name') ? ' has-error' : '' }}">
                                    <input type="text" id="f_name" class="form-control " placeholder="First Name" name="f_name" value="{{ old('f_name') }}" required autofocus>

                                    @if ($errors->has('f_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                    @endif



                                </div>
                                <div class="col-sm {{ $errors->has('l_name') ? ' has-error' : '' }}">
                                    <input type="text" class="form-control" placeholder="Last Name" name="l_name" value="{{ old('l_name') }}" required autofocus>



                                    @if ($errors->has('l_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Email--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" placeholder="e-mail Address" name="email" required>


                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif



                        </div>
                    </div>

                    {{--Password--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="Password" name="password" required >

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif


                        </div>
                    </div>

                    {{--re Password--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group" >
                            <input type="password" class="form-control" placeholder="re enter Password" name="password_confirmation" required>
                        </div>
                    </div>





                    {{--Phone Number--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile Number" name="phone" required>
                        </div>
                    </div>

                    {{--Date of Birth--}}

                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="DOB [YYYY/MM/DD]" name="dob" required>
                        </div>
                    </div>

                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Personal Address" name="address" required>
                        </div>
                    </div>

                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <textarea rows="5" type="text" class="form-control" placeholder="Personal Summery" name="p_summery" required></textarea>
                           </div>
                    </div>



                    <div class="form-group" style="width: 190px; margin-top: 110px; ">
                        <div class="">
                            <button type="submit" class="btnSubmit" style="margin-left: 100px">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>





























        <div class="col-md-6 login-form-2">
            <div class="login-logo">
                <img src="{{asset('assets')}}/assets/img/logo.PNG" />
            </div>
            <div class="title_employee">
                <h3>Signup as a Employee</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('admin.register') }}">
                    {{ csrf_field() }}


                    {{--Profile Image --}}






            {{--<div class="form-group">--}}
                {{--<div class="form-group"  style="text-align: center" >--}}
                    {{--<img id="blah1" src="https://bit.ly/2q98CcI"style="width: 150px; height: 150px" alt=""/><br>--}}
                    {{--<label for="file-upload"style="margin-left:5px;color: #d9edf7">Upload Company Logo</label>--}}

                    {{--<input type='file' onchange="readURL1(this);" style="margin-left: 100px;color:#f05837"/>--}}

                {{--</div>--}}
            {{--</div>--}}



                    {{--Company Name--}}
                    <div class="form-group"  style="height: 40px">
                        <div class="form-group">
                            <input id="c_name" type="text" class="form-control" placeholder="Company Name" name="c_name" required>
                        </div>
                    </div>


                    {{--email--}}
                    <div class="form-group"  style="height: 40px">
                        <div class="form-group">
                            <input id="c_email" type="text" class="form-control" placeholder="Company e-Mail" name="email" required>
                        </div>
                    </div>


                    {{--Phone--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <input id="c_phone" type="text" class="form-control" placeholder="Company Phone" name="c_phone" required>
                        </div>
                    </div>



                    {{--Location--}}
                    <div class="form-group"  style="height: 40px">
                        <div class="form-group">
                            <input id="c_location" type="text" class="form-control" placeholder="Nearest City" name="c_city" required>
                        </div>
                    </div>

                    {{--Password--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required >
                        </div>
                    </div>

                    {{--re Password--}}
                    <div class="form-group" style="height: 40px">
                        <div class="form-group" >
                            <input type="password" class="form-control" placeholder="re enter Password" name="password_confirmation" required>
                        </div>
                    </div>





                    @foreach($errors->all() as $message)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-dismissible alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!! $message !!}</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{--Type--}}
                    <div class="form-group">
                        <div class="form-group">
                            {{--<input id="c_type" type="text" class="form-control" placeholder="Company Type" name="c_type" required>--}}

                            <select name="c_field">
                                <option value="0">Select Company Type</option>
                                <option value="1">Software</option>
                                <option value="2">HR</option>
                                <option value="3">Banking</option>
                            </select>
                        </div>
                    </div>






                    <div class="form-group" style="width: 190px">
                        <div class="">
                            <button type="submit" class="btnSubmit" style="margin-left: 100px">
                                Sign up
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<style>

    .login-container{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .login-logo{
        position: relative;
        margin-left: -41.5%;
    }
    .login-logo img{
        position: absolute;
        width: 24%;
        margin-top: 70%;
        background: #282726;
        border-radius: 4.5rem;
        padding: 5%;
    }
    .login-form-1{
        padding: 9%;
        background:#282726;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-1 h3{
        text-align: center;
        margin-bottom:12%;
        color:#fff;
    }
    .login-form-2{
        padding: 9%;
        background: #f05837;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-2 h3{
        text-align: center;
        margin-bottom:12%;
        color: #fff;
    }
    .btnSubmit{
        font-weight: 600;
        width: 50%;
        color: #282726;
        background-color: #fff;
        border: none;
        border-radius: 1.5rem;
        padding:2%;
    }
    .btnForgetPwd{
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }
    .btnForgetPwd:hover{
        text-decoration:none;
        color:#fff;
    }

    .title_employee{
        background:#282726;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);

    }
    .title_candidate{
        background: #f05837;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);

    }

    .body2 {
        background-image: url({{asset('assets/images/blog-bg.png')}});
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .control-label1{
        color:#f05837 ;
    }

    .textforget{
        color: #00c0ef;
    }
</style>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }



    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

{{--welcome.blade coppy --}}

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