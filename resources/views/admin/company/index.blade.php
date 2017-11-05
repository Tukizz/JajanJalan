<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Menu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/skin-blue.min.css') }}">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="https://use.fontawesome.com/75341ac20c.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jajan</b>Jalan</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><i class="fa fa-user-circle" aria-hidden="true"></i>  {{ Auth::user()->adminName }}</span>

            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
        
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>

                <p>
                  {{ Auth::user()->adminName }} - Admin
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>


                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>
        </div>
        <div class="pull-left info">
          <a href=""><h5>{{ Auth::user()->adminName }}</h5></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="/admin/company/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control" placeholder="Search Company Name..." required>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <span class="input-group-btn">
              <button type="submit" name="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/admin/company"><i class="fa fa-building"></i> <span>Company</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
          </a>
        </li>
        <li>
          <a href="/admin/branch">
            <i class="fa fa-cutlery"></i> <span>Branch</span></a>
        </li>
        <li class="">
          <a href="/admin/brand">
            <i class="fa fa-lemon-o"></i> <span>Brand</span>
          </a>
        </li>
        <li class="">
          <a href="/admin/userlist">
            <i class="fa fa-user"></i> <span>List User</span>
                        
          </a>

        </li>
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
        List Company
        <small><a href="/admin/company/create">Input Company</a></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
      @foreach ($company as $data)
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="\images\companylogo\{{$data->companyLogoUrl}}" alt="User Image">
                <span class="username"><a href="#">{{$data->companyName}}</a></span>
                <span class="description">{{$data->companyWebsite}} - {{$data->companyEmail}}</span>
              </div>
              <!-- /.user-block -->
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
              <p><b>E-mail : </b>{{$data->companyEmail}}</p>
        <p><b>Phone : </b>{{$data->companyPhone}}</p>
              <p><b>Notes : </b>{{$data->companyNotes}}</p>
              <p><b>Status : </b>{{$data->companyStatus}}</p>
                  <form action="/admin/company/{{$data->companyId}}" method="post" onSubmit="if(!confirm('Are you sure want to delete this?')){return false;}">    
            <a href="/admin/company/{{$data->companyId}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>Edit</a>

    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-thumbs-o-up"></i>Delete</button>

     </form>

            <span class="pull-right text-muted">
            @if($data->companyEnteredById == !null) 
            {{$data->user->userName}}
            @else
            No Owner
            @endif
             - {{$data->created_at}}</span>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        @endforeach
      </div>
      <center>
      {{$company->appends(Request::only('keyword'))->links()}}
      </center>
<hr>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>© Powered By<a href="http://karismatech.com/"> Karismatech </a>2017</strong> .
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('js/app.js') }}"></script>
<!-- ownerLTE App -->
<script src="{{ URL::asset('js/Adminlte.min.js') }}"></script>

</body>
</html>




