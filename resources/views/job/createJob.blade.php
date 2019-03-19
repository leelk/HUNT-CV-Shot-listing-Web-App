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
        <section class="content-header">
            <h1>
                Create new Vacancy
            </h1>

        </section>

        <!-- Main content -->

      <div class="col-md-11 col-md-offset-0" style="background-color: #ffffff ;" >


          <form method="POST" >
                    {{csrf_field()}}
              <div class="container">
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Vacancy Title</label>
                              <input type="text" class="form-control" name="title" >
                          </div>
                          <br>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Position</label>
                              <input type="text" class="form-control" name="position" >
                          </div>
                      </div>

                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Vacancy Description</label>
                              <textarea class="form-control" name="description" rows="6"></textarea>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="container">
                  <p>Qlifications</p>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Qualification 1</label>
                              <input type="text" class="form-control" name="q1" >
                          </div>
                      </div>


                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Qualification 2</label>
                              <input type="text" class="form-control" name="q2" >
                          </div>
                      </div>
                  </div>
                  <div class="row">

                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Qualification 3</label>
                              <input type="text" class="form-control" name="q3" >
                          </div>
                      </div>


                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Qualification 4</label>
                              <input type="text" class="form-control" name="q4" >
                          </div>
                      </div>
                  </div>
              </div>


              <div class="container">
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Salary</label>
                              <input type="text" class="form-control" name="salary" >
                          </div>

                      </div>

                  <div class="col-sm-4" >
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Closing Date</label>
                          <input type="text" class="form-control" name="closedate" >
                      </div>
                  </div>
                  </div>
              </div>


            <div class="container">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" style="float: right;margin-right: 100px">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </div>







          </form>

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