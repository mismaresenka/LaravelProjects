@extends('doctors.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/import/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/import/dist/css/adminlte.min.css')}}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Home</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">

        <span class="brand-text font-weight-light">Records Simulator</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('/import/dist/img/low.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Adrian Putian</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->





            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Doctors Section
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('doctors.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Doctor Entry</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('doctors.create')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Doctor Record</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Patients Section
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('patients.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Patients Entry</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('patients.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Patient Record</p>
                  </a>
                </li>
              </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Create New Doctor Record</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <!--     Content!!!    -->

            <!-- <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name="FirstName" class="form-control"  placeholder="FirstName">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" name="MiddleName" class="form-control" placeholder="Middle Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" name="LastName" class="form-control" placeholder="Last Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Sex</label>
                    <input type="text" name="Sex" class="form-control" placeholder="Sex">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Birth Date</label>
                    <input type="text" name="BirthDate" class="form-control" placeholder="Birth Date">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="Address" class="form-control" placeholder="Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact Number</label>
                    <input type="text" name="ContactNumber" class="form-control" placeholder="Contact Number">
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div> -->



            @if($errors->any())
            <div class="alert alert-danger">
              <strong>Whoops</strong> There were some problems with your input. <br> <br>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form action="{{route('doctors.store')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Doctor ID: </strong>
                    <input type="text" name="DoctorID" class="form-control" placeholder="Doctor ID">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>First Name: </strong>
                    <input type="text" name="Firstname" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Last Name: </strong>
                    <input type="text" name="LastName" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Sex: </strong>
                    <input type="text" name="Sex" class="form-control" placeholder="Sex">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Specialization: </strong>
                    <input type="text" name="Specialization" class="form-control" placeholder="Specialization">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Birth Date: </strong>
                    <input type="text" name="BirthDate" class="form-control" placeholder="Birth Date">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Address: </strong>
                    <input type="text" name="Address" class="form-control" placeholder="Address">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Contact Number: </strong>
                    <input type="text" name="ContactNumber" class="form-control" placeholder="Contact Number">
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('/import/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('/import/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE -->
  <script src="{{ asset('/import/dist/js/adminlte.js')}}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset('/import/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>