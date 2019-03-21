<!DOCTYPE html>

<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>HUNT</title>

   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">




   <!-- Google Font -->
   <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <!-- Main Header -->
   <header class="main-header">


      <!-- Logo -->
      <a  class="logo">
         <h5><strong>Employee Dashboard</strong></h5>
         <a class="btn btn-primary" href="{{url('admin')}}" role="button">Back</a>

      </a>

      <!-- Header Navbar -->

   </header>
   <!-- Left side column. contains the logo and sidebar -->
   <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

         <!-- Sidebar user panel (optional) -->
         <div class="user-panel">
            <div class="pull-left image">
               <img src="{{asset('assets/images/avatar5.png')}}" class="img-circle" alt="User Image">

               <p><strong>{{Auth::user()->c_name}} </strong></p>
               <!-- Status -->
               <a href="#"><i class="fa fa-circle text-success"></i> {{Auth::user()->job_title}}</a>
            </div>
            <div class="pull-left info">




               <!-- Status -->

            </div>
         </div>



         <!-- Sidebar Menu -->
         <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>New Vacancy</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Posted Vacancies</span></a></li>

         </ul>
         <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
   </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br><br><br><br>


 <div>


      @foreach ($vacancies as $vacancy)

         {{--<h5> {{$vacancy->title}}</h5>--}}



         {{--{{$vacancy->all()}}--}}


         {{--<div>--}}
            {{--{{$vacancy->all()}}--}}

            {{--<br><br><br>--}}
         {{--</div>--}}


         <div class="col-md-4">
            <div class="square-service-block">
               <a href="#">
                  <div class="ssb-icon"> <i class="fa fa-globe" aria-hidden="true"></i> </div>
                  <h2 class="ssb-title">{{$vacancy->title}}</h2>
               </a>
            </div>
         </div>
      @endforeach





      <style>

         a:hover, a:focus {
            color: #2a6496;
            text-decoration: none;
         }
         .square-service-block{
            position:relative;
            overflow:hidden;
            margin:15px auto;
         }
         .square-service-block a {
            background-color: #e74c3c;
            border-radius: 5px;
            display: block;
            padding: 60px 20px;
            text-align: center;
            width: 100%;
         }
         .square-service-block a:hover{
            background-color: rgba(231, 76, 60, 0.8);
            border-radius: 5px;
         }

         .ssb-icon {
            color: #fff;
            display: inline-block;
            font-size: 28px;
            margin: 0 0 20px;
         }

         h2.ssb-title {
            color: #fff;
            font-size: 20px;
            font-weight: 200;
            margin:0;
            padding:0;
            text-transform: uppercase;
         }



      </style>



 </div>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   <div class="control-sidebar-bg">

   </div>
</div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>

























































{{--@foreach ($vacancies as $vacancy)--}}

   {{--<h5> {{$vacancy->title}}</h5>--}}



 {{--{{$vacancy->all()}}--}}


{{--<div>--}}
   {{--{{$vacancy->all()}}--}}

   {{--<br><br><br>--}}
{{--</div>--}}






{{--@endforeach--}}




{{--<button class="btn btn-primary" type="submit">Button</button>--}}

