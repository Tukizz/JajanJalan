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
              <span class="hidden-xs"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->adminName }}</span>

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
      <form action="/admin/userlist/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control" placeholder="Search User ID & User Name..." required>
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
        <li class="">
          <a href="/admin/company"><i class="fa fa-building"></i> <span>Company</span>

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
        <li class="active">
          <a href="/admin/userlist">
            <i class="fa fa-user"></i> <span>List User</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
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
        List User
        <small><a href="#" data-toggle="modal" data-target="#myModal2">Input User</a></small>
      </h1>
    </section>
<!-- MODAL -->
	<div id="myModal2" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    <!-- Modal content-->
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h3 class="modal-title"><b>JajanJalan Register!</b></h3>
      			</div>
      		<div class="modal-body">
            	<form accept-charset="UTF-8"  method="POST" action="/admin/userlist">
            		{{ csrf_field() }}
              		<fieldset>
                		<div class="form-group{{ $errors->has('userId') ? ' has-error' : '' }}">
                			<h4><b>Username</b></h4>
                			<input class="form-control" placeholder="Username" name="userId" type="text" value="{{ old('userId') }}" required autofocus>
                		@if ($errors->has('userId'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('userId') }}</strong>
                            </span>
                        @endif
              			</div>

                		<div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                			<h4><b>Nama Lengkap</b></h4>
                  			<input class="form-control" placeholder="Nama Lengkap" name="userName" type="text" value="{{ old('userName') }}" required autofocus>
                  		@if ($errors->has('userName'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('userName') }}</strong>
                            </span>
                  		@endif
                		</div>

              			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                			<h4><b>Alamat</b></h4>
                			<input class="form-control" placeholder="Alamat"  name="address" value="{{ old('address') }}" required autofocus type="text">
                		@if ($errors->has('address'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('address') }}</strong>
                            </span>
                		@endif
              			</div>

              			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                			<h4><b>Alamat Email</b></h4>
                			<input class="form-control" placeholder="Alamat Email" name="email" type="email" value="{{ old('email') }}" required>
                		@if ($errors->has('email'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
              			</div>

              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                		@if ($errors->has('password'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
              			</div>

              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Confirm Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password_confirmation" type="password" value="" required>
              			</div>

              			<input class="btn btn-lg btn-mas btn-block" type="submit" value="REGISTER"><br>
              			<p align="center" id="privacy">Dengan melanjutkan laman ini, Anda setuju dengan <a href="#"><u>Syarat dan Ketentuan</u></a>,<a href="#"> <u>Kebijakan Cookie</u></a>, <a href="#"><u>Kebijakan Privasi dan</u></a> <a href="#"><u>Kebijakan Konten</u></a> JajanJalan. </p>
            		</fieldset>
              	</form>
      		</div>
    		</div>
  		</div>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
      @foreach ($user as $data)
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
              @if ($data->picture)
                        <img class="img-circle" src="\images\user\{{$data->picture}}" alt="User Image">
                      @else
                        <img class="img-circle" src="\images\default.jpg" alt="User Image">
                      @endif
                <span class="username"><a href="#">{{$data->userId}}</a></span>
                <span class="description">{{$data->userName}}</span>
              </div>
              <!-- /.user-block -->
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
        <p><b>Address : </b>{{$data->address}}</p>
              <p><b>Email : </b>{{$data->email}}</p>   
            @foreach($data->role as $roles)
              @if ($roles->pivot->role_id == '1')
                <p><b>Jabatan : </b>Normal User</p>
              @elseif($roles->pivot->role_id == '2')
                <p><b>Jabatan : </b>Owner Restaurant</p>
              @endif
              
            @endforeach
            <a href="/admin/userlist/{{$data->userId}}" type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>Edit</a>

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
      {{$user->appends(Request::only('keyword'))->links()}}
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