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
    <title>Document</title>
</head>
<body class="body2">




<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <div class="title_candidate">

                <h3>Login as a Job Seeker</h3>
            </div>




            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
            </div>
            <div class="form-group">
                <a href="#" class="btnForgetPwd">Forget Password?</a>
            </div>

        </div>
        <div class="col-md-6 login-form-2">
            <div class="login-logo">

                <img src="assets/images/{{'logo.PNG'}}"  />


                {{--<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>--}}




            </div>

            <div class="title_employee">

                <h3>Login as a Employee seeker</h3>
            </div>




            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
            </div>
            <div class="form-group">

                <a href="#" class="btnForgetPwd" value="Login">Forget Password?</a>
            </div>
            </form>
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
</style>