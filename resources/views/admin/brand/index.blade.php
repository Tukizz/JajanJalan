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
  <link rel="stylesheet" href="{{ URL::asset('css/picturestyle.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/skin-blue.min.css') }}">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script src="https://use.fontawesome.com/75341ac20c.js"></script>

        <style>
          .brandpicture{
  margin-top: 10px;
}
        </style>
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
      <form action="/admin/brand/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control" placeholder="Cari Produk Atau Company..." required>
          <span class="input-group-btn">
              <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/admin/company"><i class="fa fa-building"></i> <span>Company</span></a></li>
        <li class="">
          <a href="/admin/branch"><i class="fa fa-cutlery"></i> <span>Branch</span></a>
        </li>
        <li class="active">
          <a href="/admin/brand">
             <i class="fa fa-lemon-o"></i> <span>Brand</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
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
        List Brand
        <small><a href="/admin/brand/create">Input Brand</a></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    
    <div class="row">
      @foreach ($brand as $data)
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
               
                @if ($data->brandPicture)
                   <img class="img-circle" src="\images\brand\{{$data->brandPicture}}" alt="User Image">
                @else
                   <img class="img-circle" src="\images\no-image.png" alt="User Image">
                @endif
                <span class="username" style="margin-top:6px;"><a href="#">{{$data->brandName}}</a> - <a href="/admin/branch/search?keyword={{$data->branch->branchName}}">{{$data->branch->branchName}}</a>
                </span>
              </div>
              <!-- /.user-block -->
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <center>
        @if ($data->brandPicture)
                  <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\brand\{{$data->brandPicture}}" width="400" height="400" alt="Photo">
                   </div>
                @else
                <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\no-image.png" width="400" height="400" alt="Photo">
                   </div>
                @endif
                 @if ($data->brandPicture2)
                 <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\brand\{{$data->brandPicture2}}" width="400" height="400" alt="Photo">
                   </div>
                   @else
                <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\no-image.png" width="400" height="400" alt="Photo">
                   </div>
                @endif
                 @if ($data->brandPicture3)
                 <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\brand\{{$data->brandPicture3}}" width="400" height="400" alt="Photo">
                   </div>
                   @else
                <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\no-image.png" width="400" height="400" alt="Photo">
                   </div>
                @endif
                 @if ($data->brandPicture4)
                 <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\brand\{{$data->brandPicture4}}" width="400" height="400" alt="Photo">
                   </div>
                   @else
                <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\no-image.png" width="400" height="400" alt="Photo">
                   </div>
                @endif
                 @if ($data->brandPicture5)
                 <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\brand\{{$data->brandPicture5}}" width="400" height="400" alt="Photo">
                   </div>
                   @else
                <div class="col-md-4">
                   <img class="img-responsive2 brandpicture" src="\images\no-image.png" width="400" height="400" alt="Photo">
                   </div>
                @endif
                </center>
                <div class="col-md-12">
              <p><b>Notes : </b>{{$data->brandPointRules}}</p>
              <form action="/admin/brand/{{$data->brandId}}" method="POST" onSubmit="if(!confirm('Are you sure want to delete this?')){return false;}">
              <a href="/admin/brand/{{$data->brandId}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="btn btn-default btn-xs" value="Delete"><i class="fa fa-remove"></i> Delete</button>
              </form>
              <span class="pull-right text-muted">{{$data->user->userName}} - {{$data->created_at}}</span>
              </div>
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
      {{$brand->appends(Request::only('keyword'))->links()}}
      </center>
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