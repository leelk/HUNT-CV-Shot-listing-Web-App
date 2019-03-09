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
    <!------ Include the above in your HEAD tag ---------->
    <title>HUNT Login</title>
</head>
<body class="body2">
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

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <div class="title_candidate">
                <h3>Login as a Candidate</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class=" control-label1">E-Mail Address</label>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label1">Password</label>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label style="color:#f05837 " >
                                    <input type="checkbox" style="color:#f05837 " class ="control-label1" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btnSubmit">
                                Login
                            </button>
                            <a class="btnForgetPwd textforget " style="font-size: 14px;" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
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
                <h3>Login as a Employee</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class=" control-label">E-Mail Address</label>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Password</label>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btnSubmit">
                                Login
                            </button>
                            <a class="btnForgetPwd textforget" style="font-size: 14px;" href="{{ route('admin.password.request') }}">
                                Forgot Your Password?
                            </a>
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
        width: 20%;
        margin-top: 19%;
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
    }

    .control-label1{
        color:#f05837 ;
    }

    .textforget{
        color: #00c0ef;
    }
</style>